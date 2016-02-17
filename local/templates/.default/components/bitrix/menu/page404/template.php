<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<ul class="not-found__links">
    <li><a href="/">Главная страница</a></li>
    <? foreach ($arResult as $item) { ?>
        <li><a href="<?= $item['LINK'] ?>"><?= $item['TEXT'] ?></a></li>
    <? } ?>
</ul>