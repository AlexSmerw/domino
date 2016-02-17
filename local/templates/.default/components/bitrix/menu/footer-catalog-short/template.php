<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<p><a class="footer__link footer__link--size-l footer__link--color-white" href="<?= $arResult['LINK'] ?>"><?= $arResult['TEXT'] ?></a></p>
<ul>
    <? foreach ($arResult['CHILDREN'] as $level1Key => $level1) { ?>
        <li><a href="<?= $level1['LINK'] ?>" class="footer__link footer__link--color-white"><?= $level1['TEXT'] ?></a></li>
    <? } ?>
</ul>