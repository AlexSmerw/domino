<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<? if (!empty($arResult)): ?>
    <? foreach ($arResult as $arItem):
        $classA = '';
        if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
            continue;
        if ($arItem["DEPTH_LEVEL"] < 2) {
            if ($arItem["SELECTED"] ) {
                if ($arItem["IS_PARENT"]) {
                    $navLi[] = "<li class='__current' ><a href='{$arItem['LINK']}'>{$arItem['TEXT']}</a></li>";
                } else {
                    $navLi[] = "<li class='__current'><b>{$arItem['TEXT']}</b></li>";
                }
            } else {
                $navLi[] = "<li><a href='{$arItem['LINK']}'>{$arItem['TEXT']}</a></li>";
            }
        }
        ?>
    <? endforeach ?>
<? endif ?>

<aside class="sidebar">
    <ul>
        <? echo implode(' ', $navLi); ?>
    </ul>
</aside>
