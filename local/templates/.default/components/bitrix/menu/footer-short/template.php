<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<? foreach ($arResult as $item) { ?>
    <p><a class="footer__link footer__link--size-l footer__link--color-white" href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></p>
<? } ?>