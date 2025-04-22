
<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var array $arResult
 * @var array $arParams
 */
if ($arResult['logo']['logoFooterMobile']) { ?>
    <div class="header__logo _desktop">
        <?php if ($arParams['IS_MAIN']) {
            ?>
            <span><img src="<?= $arResult['logo']['logoFooterMobile'] ?>" alt=""></span>
        <?php } else { ?>
            <a href="/"><img src="<?= $arResult['logo']['logoFooterMobile'] ?>" alt=""></a>
        <?php } ?>
    </div>
<?php }
