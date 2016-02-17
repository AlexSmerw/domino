<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?// dv($arResult['COMPANY']); ?>
<div class="l-flex__item footer__links">
    <p><a class="footer__link footer__link--size-l footer__link--color-white" href="<?= $arResult['LINK'] ?>"><?= $arResult['TEXT'] ?></a></p>
    <ul>
        <? foreach ($arResult['CHILDREN'] as $item) { ?>
            <li><a class="footer__link" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
        <? } ?>
    </ul>
</div>