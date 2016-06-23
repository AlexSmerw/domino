<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="col_1_of_3 span_1_of_3">
    <h3>Категории магазинов</h3>
    <ul>
        <?foreach($arResult['TYPES'] as $key => $type){?>
            <li class="navy-link-li"><div class="tmp"><a class="navy-link" href="/shops_list/tag-<?=$key?>/"><?=$type?></a></div></li>
        <?}?>
    </ul>
</div>
