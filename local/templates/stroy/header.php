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
			// Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/bootstrap.css");
			// Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . "/css/style.css");

			// Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/jquery.min.js");
			// Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/move-top.js");
			// Asset::getInstance()->addJs(DEFAULT_TEMPLATE_PATH . "/js/scripts.js");

			Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1">');
			Asset::getInstance()->addString('<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />');
			Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;700&amp;display=swap" rel="stylesheet">');
		?>
	</title>

	<!-- <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
			});
		});
	</script> -->

	<!-- <script type="application/x-javascript"> 
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
	</script> -->
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
                            Logo
                        </a>
                    </p>

                    <?
                    // $APPLICATION->IncludeComponent(
                    //     "bitrix:menu", 
                    //     "menu_top", 
                    //     array(
                    //         "ALLOW_MULTI_SELECT" => "N",
                    //         "CHILD_MENU_TYPE" => "left",
                    //         "DELAY" => "N",
                    //         "MAX_LEVEL" => "1",
                    //         "MENU_CACHE_GET_VARS" => array(
                    //         ),
                    //         "MENU_CACHE_TIME" => "3600",
                    //         "MENU_CACHE_TYPE" => "N",
                    //         "MENU_CACHE_USE_GROUPS" => "Y",
                    //         "ROOT_MENU_TYPE" => "top",
                    //         "USE_EXT" => "N",
                    //         "COMPONENT_TEMPLATE" => "menu_top"
                    //     ),
                    //     false
                    // );
                    ?>	
                </nav>

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
                        
                           <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/whatsapp.svg" alt="whatsapp"/>
                           
                        </a>
                    </li>
                    <li class='itemSocialLink'>
                        <a  href="#"
                            class="socialLink"    
                        >
                            2
                        </a>
                    </li>
                    <li class='itemSocialLink'>
                        <a  href="#"
                            class="socialLink"    
                        >
                            3
                        </a>
                    </li>
                </ul>
            </div>
        </div>
            
		</div>
	</div>	
	<main class="mainBox">