<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use BitrixHelperLib\Classes\Block;

if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
    try {
        $arResult['IMAGES'] = Block\Getter::instance()
            ->setFilter(array(
                'IBLOCK_ID' => IBLOCK_SLIDER,
                'ACTIVE' => 'Y',
            ))
            ->get();

        if (empty($arResult['IMAGES'])){
            throw new Exception('No IMAGES');
        }


    } catch (Exception $e) {
        $this->AbortResultCache();
        //define('ERROR_404', true);
        //echo $e->getMessage();
    }
    $this->IncludeComponentTemplate();
}

