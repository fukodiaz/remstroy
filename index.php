<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Ремстрой");
?>
<div class="slogan">
    <div class="innerSlogan">
        <h2 class="sloganHeading">
            Светопрозрачные конструкции из ПВХ и алюминия с гарантией
        </h2>
        <p class="sloganText">
            Производим окна и двери, гарантируя широкий выбор форм, цветов, декоративных элементов под потребности каждого клиента.
        </p>
        <button class="btnBasic btnAmount">
            Уточнить стоимость
        </button>
    </div>
</div>

<div class="boxInsideContent">
    <section class="intro">
        <h2 class="headIntro">
            О компании
        </h2>

        <div class="contentIntro">
            <div class="mainInfo">
                <div class="textInfo">
                    <p class="firstTextInfo">
                        Мы производим и устанавливаем светопрозрачные конструкции из ПВХ и алюминия. Создаём окна и двери, которые обеспечивают тепло, тишину и комфорт. У нас собственное производство, опытные специалисты по монтажу и только современные материалы от проверенных брендов.
                    </p>
                    <p class="secondTextInfo">
                        Предоставляем полный цикл услуг: замер, изготовление, доставка, монтаж и последующее обслуживание. Надёжность, точность и внимание к деталям — это то, за что нас выбирают снова и снова.
                    </p>
                    <p class="thirdTextInfo">
                        Каждый проект для нас — это возможность сделать чью‑то жизнь комфортнее. Мы не экономим на качестве, работаем аккуратно. Нас рекомендуют друзьям — и это для нас лучший знак того, что всё делаем правильно.
                    </p>
                </div>

                <div class="boxVideo">
                    <video class="videoIntro" width="100%" height="100%"></video>
                    <button class="btnPlayVideo">
                        <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/triangle_video.svg" alt="play video" />
                    </button>
                </div>
            </div>

            <div class="advantages">
                <ul class="listAdvantages">
                    <li class="itemAdvantage">
                        <p class="boxImgAdvan">
                            <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/expirience.svg" alt="expirience" />
                        </p>
                        <h3 class="headAdvantage">
                            20 лет опыта
                        </h3>
                        <p class="descAdvantage">
                            С 2006 года на рынке: тысячи установок, довольные клиенты и безупречная репутация.
                        </p>
                    </li>

                    <li class="itemAdvantage">
                        <p class="boxImgAdvan">
                            <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/production.svg" alt="production" />
                        </p>
                        <h3 class="headAdvantage">
                            Собственное производство
                        </h3>
                        <p class="descAdvantage">
                           Контролируем качество на каждом этапе: от замера до установки готовой конструкции «под ключ».
                        </p>
                    </li>

                    <li class="itemAdvantage">
                        <p class="boxImgAdvan">
                            <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/garant.svg" alt="garant" />
                        </p>
                        <h3 class="headAdvantage">
                            5 лет гарантия
                        </h3>
                        <p class="descAdvantage">
                           Качество продукции подтверждено в лаборатории и сертифицировано в системе Рос стандарт.
                        </p>
                    </li>

                    <li class="itemAdvantage">
                        <p class="boxImgAdvan">
                            <img src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/service.svg" alt="service" />
                        </p>
                        <h3 class="headAdvantage">
                            Сервис и ремонт
                        </h3>
                        <p class="descAdvantage">
                           Сервисное обслуживание и ремонт конструкций любых производителей.
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<!-- our works -->
 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"works",
	Array(
		"IBLOCK_TYPE" => "works",
		"IBLOCK_ID" => "3",
		"NEWS_COUNT" => "20",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_SHADOW" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PREVIEW_TRUNCATE_LEN" => "",
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DISPLAY_PANEL" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Новости",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
		"PAGER_SHOW_ALL" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>
 <!-- end our works -->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>