
<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)): ?>
   <? foreach($arResult as $arItem):
            $navLi[] = "<p><a class='link' href='{$arItem['LINK']}'>{$arItem['TEXT']}</a></p>";
        ?>
    <?endforeach?>
<?endif?>

<div>
    <? echo implode(' ', $navLi);?>
</div>