<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<h2>Магазины ТЦ Домино</h2>
<ul>
    <?foreach($arResult['SHOPS'] as $shop){?>
        <li ><div class="navy-link-li"><a class="navy-link" href="<?=$shop->getUrl()?>"><?=$shop->NAME?></a></div></li>
    <?}?>
        <li ><div class="navy-link-li"><a class="navy-link" href="/shops_list/">Все магазины</a></div></li>
</ul>