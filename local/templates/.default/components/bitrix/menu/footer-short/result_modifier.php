<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult as $key => $item) {
    if ($item['PARAMS']['TYPE'] == 'CATALOG' || $item['PARAMS']['TYPE'] == 'CONTACTS') {
        unset($arResult[$key]);
    }
}