<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="col_1_of_3 span_1_of_3">
    <h3><?= $arResult['ITEM']->NAME ?></h3>
    <img
        src="<?= $arResult['ITEM']->getDetailImageThumb(array('width' => 355, 'height' => 242, 'type' => 'put_out')) ?>"
        alt="<?= $arResult['ITEM']->NAME ?>"/>
    <p><?= truncate_by_words($arResult['ITEM']->PREVIEW_TEXT, 40) ?><a href="/about/"> Подробнее </a></p>
</div>