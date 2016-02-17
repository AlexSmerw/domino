<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

// находим дополнительные каталожные страницы меню
foreach ($arResult as $key => $item) {
    if ($item['PARAMS']['TYPE'] == 'CATALOG_EXTRA') {
        $arResult['CATALOG_EXTRA'][] = $item;
        unset($arResult[$key]);
    }
}

$arResult['MENU'] = cp_menu_plain2tree($arResult);