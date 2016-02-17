<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$menu = cp_menu_plain2tree($arResult);

foreach ($menu as $item) {
    if ($item['PARAMS']['TYPE'] == 'OPT') {
        $arResult = $item;
        break;
    }
}