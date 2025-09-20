<?php 
if (!empty($arResult["SECTIONS"])): ?>
    <section class="products">
        <h3 class="headTypesProds">
            Типы продукции:
        </h3>

        <ul class="listTypesProds">
            <?php foreach ($arResult["SECTIONS"] as $key => $section): ?>
                <li class="itemTypeProds">
                    <?php if ($section["NAME"]): ?>
                        <button 
                            class="btnSecond btnTypeProds <?=($key == 0 ? "btnSecondActive" : "")?>"
                            data-section="<?=$section["CODE"];?>"
                        >
                            <?=$section["NAME"];?>
                        </button>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
<?endif;?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="boxProducts">
        <ul class="listProducts owl-carousel">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <li 
                    class="itemProduct <?=($item['SECTION_CODE'] != $arResult['SECTIONS'][0]['CODE'] ? 'itemProductHidden' : '')?>" 
                    data-section='<?=($item["SECTION_CODE"] ?? $item["SECTION_CODE"])?>'
                >
                    <a href="#" class="linkProduct">
                        <?php if ($item["PREVIEW_PICTURE_SRC"]): ?>
                            <img 
                                src="<?= $item["PREVIEW_PICTURE_SRC"] ?>" 
                                alt="<?= $item["NAME"] ?>" 
                                width="323" 
                                height="460"
                            >
                        <?php endif; ?>
                    </a>
                    
                    <div class="infoProduct">
                        <?php if ($item["PREVIEW_TEXT"]): ?>
                            <p class="textPreview">
                                <?= $item["PREVIEW_TEXT"] ?>
                            </p>
                        <?endif;?>

                        <?php if ($item["NAME"]): ?>
                            <h3 class="nameProduct">
                                <?=$item['NAME']?>
                            </h3>
                        <?endif;?>

                        <?php if ($item["DETAIL_TEXT"]): ?>
                            <p class="productDescription">
                                <?=$item['DETAIL_TEXT']?>
                            </p>
                        <?endif;?>

                        <button class="btnBasic">
                            Заказать
                        </button>
                    </div>
                    <?/*
                    <?php if ($item["PREVIEW_PICTURE_SRC"]): ?>
                        <img src="<?= $item["PREVIEW_PICTURE_SRC"] ?>" alt="<?= $item["NAME"] ?>">
                    <?php endif; ?>

                    <p><?= $item["PREVIEW_TEXT"] ?></p>

                    <?php if (!empty($item["PROPERTIES"])): ?>
                        <ul>
                            <?php foreach ($item["PROPERTIES"] as $code => $prop): ?>
                                <?php if (!empty($prop["VALUE"])): ?>
                                    <li>
                                        <b><?= $prop["NAME"] ?>:</b>
                                        <?= is_array($prop["VALUE"]) ? implode(", ", $prop["VALUE"]) : $prop["VALUE"] ?>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    */?>
                </li>
            <?php endforeach; ?>
        </ul>

        <button class="btnPrevArrowProduct">
            <img    src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/arrow_prev.svg" 
                    alt="arrow_prev" />
        </button>
        <button class="btnNextArrowProduct">
            <img    src="<?=DEFAULT_TEMPLATE_PATH_IMG?>/images/icons/arrow_next.svg" 
                    alt="arrow_next" />
        </button>
    </div>
</section>
<?php endif; ?>