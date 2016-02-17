
<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)): ?>
   <? foreach($arResult as $arItem):
            $navLi[] = "<li><a href='{$arItem['LINK']}'>{$arItem['TEXT']}</a></li>";
        ?>
    <?endforeach?>
<?endif?>

<aside>
    <ul>
        <? echo implode(' ', $navLi);?>
    </ul>
</aside>
