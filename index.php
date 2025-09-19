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
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>