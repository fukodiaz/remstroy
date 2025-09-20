<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

if (!Loader::includeModule("iblock")) return;

$arSelect = ["ID", "NAME", "PREVIEW_TEXT", "PREVIEW_PICTURE"];
$arFilter = ["IBLOCK_ID" => $arParams["IBLOCK_ID"], "ACTIVE" => "Y"];
$res = CIBlockElement::GetList([], $arFilter, false, false, $arSelect);

$arResult["ITEMS"] = [];
while ($ob = $res->GetNextElement()) {
    $arFields = $ob->GetFields();
    $arFields["PREVIEW_PICTURE_SRC"] = CFile::GetPath($arFields["PREVIEW_PICTURE"]);
    $arResult["ITEMS"][] = $arFields;
}