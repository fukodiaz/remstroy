<?php 
if (!empty($arResult["ITEMS"])):?>
    <section class="works">
        <h2 class="headingWorks">
            Наши работы
        </h2>

        <ul class="listWorks">
            <?php foreach ($arResult["ITEMS"] as $item): ?>
                <li class="itemWork">
                    <?php if ($item["PREVIEW_PICTURE_SRC"]): ?>
                        <a href="#" class="linkWork">
                            <img src="<?= $item["PREVIEW_PICTURE_SRC"] ?>" alt="<?= $item["NAME"] ?>">
                        </a>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
<?endif;?>