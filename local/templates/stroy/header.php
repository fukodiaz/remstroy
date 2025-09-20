<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		use Bitrix\Main\Page\Asset;
		$APPLICATION -> ShowHead();
	?>

	<title>
		<?php $APPLICATION -> ShowTitle(); ?>

		<?php
			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/bootstrap.css");
			Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");
            Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/form.css");
            Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/owl.carousel.min.css");

			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.min.js");
            Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/owl.carousel.min.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/move-top.js");
			Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/scripts.js");

            Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/form.js");
            Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/sliders.js");

			Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
			Asset::getInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');
			Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&amp;display=swap" rel="stylesheet">');
            Asset::getInstance()->addString('<link rel="icon" type="image/svg" href="/favicon.svg" />');
		?>
	</title>
</head>
<body>
	<div id="panel">
		<?php 
			$APPLICATION->ShowPanel();
		?>
	</div>
    
	<div class="mainWrapper">	
        <div class="header">
            <div class="innerHeader">
                <nav class="mainNav">
                    <p class="boxLogo">
                        <a  href='/'
                            class="linkLogo"
                        >
                            <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/logo.png" alt="logo"/>
                        </a>
                    </p>

                    <?
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu", 
                        "menu_top", 
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(
                            ),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                            "COMPONENT_TEMPLATE" => "menu_top"
                        ),
                        false
                    );
                    ?>	
                </nav>

                <div class="boxTopContacts">
                    <p class="boxHeaderPhone">
                        <span>
                            8 (4162) 210-220
                        </span>
                    </p>

                    <ul class='listSocialLinks'>
                        <li class='itemSocialLink'>
                            <a  href="#"
                                class="socialLink"    
                            >
                                <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/whatsapp.svg" alt="whatsapp"/>
                            </a>
                        </li>
                        <li class='itemSocialLink'>
                            <a  href="#"
                                class="socialLink"    
                            >
                                <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/vk.svg" alt="vk"/>
                            </a>
                        </li>
                        <li class='itemSocialLink'>
                            <a  href="#"
                                class="socialLink"    
                            >
                                <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/telegram.svg" alt="telegram"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
            
	
	<main class="mainBox">