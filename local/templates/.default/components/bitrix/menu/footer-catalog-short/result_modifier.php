<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

// удаляем дополнительные каталожные страницы меню
foreach ($arResult as $key => $item) {
    if ($item['PARAMS']['TYPE'] == 'CATALOG_EXTRA') {
        unset($arResult[$key]);
    }
}

$menu = cp_menu_plain2tree($arResult);

foreach ($menu as $item) {
    if ($item['PARAMS']['TYPE'] == 'CATALOG') {
        $arResult = $item;
        break;
    }
}