<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/**
 * @var array $arResult
 * @var array $arParams
 */
if ($arResult['logo']['logoHeaderDesktop']) { ?>
    <div class="header__logo _desktop">
        <?php if ($arParams['IS_MAIN']) {
            ?>
            <span><img src="<?= $arResult['logo']['logoHeaderDesktop'] ?>" alt=""></span>
        <?php } else { ?>
            <a href="/"><img src="<?= $arResult['logo']['logoHeaderDesktop'] ?>" alt=""></a>
        <?php } ?>
    </div>
<?php }

if ($arResult['logo']['logoHeaderMobile']) { ?>
    <div class="header__logo _mobile">
        <?php if ($arParams['IS_MAIN']) { ?>
            <span><img src="<?= $arResult['logo']['logoHeaderMobile'] ?>" alt=""></span>
        <?php } else { ?>
            <a href="/"><img src="<?= $arResult['logo']['logoHeaderMobile'] ?>" alt=""></a>
        <?php } ?>
    </div>
<?php } ?>
