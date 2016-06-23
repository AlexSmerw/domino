<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use BitrixHelperLib\Classes\Block;
$arParams['date'] = date("Y-m-d");
if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
    try {
        $arResult['CONTACTS'] = Block\Getter::instance()
            ->setFilter(array(
                'IBLOCK_ID' => IBLOCK_CONTACTS,
                'ACTIVE' => 'Y',
            ))
            ->getOne();

        if (empty($arResult['CONTACTS'])){
            throw new Exception('No CONTACTS');
        }


    } catch (Exception $e) {
        $this->AbortResultCache();
        //define('ERROR_404', true);
        //echo $e->getMessage();
    }
    $this->IncludeComponentTemplate();
}

