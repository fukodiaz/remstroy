<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
if (!Loader::includeModule("iblock")) return;

$iblockId = (int)$arParams["IBLOCK_ID"];

$arSelect = ["*"];
$arFilter = [
    "IBLOCK_ID" => $iblockId,
    "ACTIVE"    => "Y",
];
$res = CIBlockElement::GetList(["SORT" => "ASC"], $arFilter, false, false, $arSelect);

$arResult["ITEMS"] = [];
$sectionIds = [];

while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();   
    $arProps  = $ob->GetProperties();  

    
    if (!empty($arFields["PREVIEW_PICTURE"])) {
        $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    }
    if (!empty($arFields["DETAIL_PICTURE"])) {
        $arFields["DETAIL_PICTURE_SRC"] = CFile::GetPath($arFields["DETAIL_PICTURE"]);
    }

    $arFields["PROPERTIES"] = $arProps; 
    $arResult["ITEMS"][] = $arFields;

    // id разделов с активными элементами
    if (!empty($arFields["IBLOCK_SECTION_ID"])) {
        $sectionIds[] = (int)$arFields["IBLOCK_SECTION_ID"];
    }
}

// выборка активных разделов с элементами
$arResult["SECTIONS"] = [];
$sectionIds = array_unique($sectionIds);
$sectionMap = [];

if (!empty($sectionIds)) {
    $arFilter = [
        "IBLOCK_ID" => $iblockId,
        "ACTIVE"    => "Y",
        "ID"        => $sectionIds,
    ];
    $arSelect = ["ID", "NAME", "CODE"];
    $rsSections = CIBlockSection::GetList(["SORT" => "ASC"], $arFilter, false, $arSelect);

    while ($arSection = $rsSections->GetNext()) {
        $arResult["SECTIONS"][] = $arSection;
        $sectionMap[$arSection["ID"]] = $arSection["CODE"];
    }
}

// SECTION_CODE для элементов
foreach ($arResult["ITEMS"] as &$item) {
    if (!empty($item["IBLOCK_SECTION_ID"]) && isset($sectionMap[$item["IBLOCK_SECTION_ID"]])) {
        $item["SECTION_CODE"] = $sectionMap[$item["IBLOCK_SECTION_ID"]];
    }
}
unset($item);