<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use BitrixHelperLib\Classes\Block;

if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
    try {
        $arResult['ITEM'] = Block\Getter::instance()
            ->setFilter(array(
                'IBLOCK_ID' => IBLOCK_DOMINO_MAIN,
                'ACTIVE' => 'Y',
            ))
            ->getOne();

        if (empty($arResult['ITEM'])){
            throw new Exception('No ITEM');
        }


    } catch (Exception $e) {
        $this->AbortResultCache();
        //define('ERROR_404', true);
        //echo $e->getMessage();
    }
    $this->IncludeComponentTemplate();
}

