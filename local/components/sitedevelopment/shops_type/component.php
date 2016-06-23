<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use BitrixHelperLib\Classes\Block;

if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
    try {

        switch ($this->GetTemplateName() == 'preview') {

            case 'preview':
                $arResult['SHOPS'] = Block\Getter::instance()
                    ->setFilter(array(
                        'IBLOCK_ID' => IBLOCK_SHOPS,
                        'ACTIVE' => 'Y',
                    ))
                    ->setPageSize(6)
                    ->setPageNum(1)
                    //->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();
                break;

            case 'list_menu':
                $arResult['SHOPS'] = Block\Getter::instance()
                    ->setFilter(array(
                        'IBLOCK_ID' => IBLOCK_SHOPS,
                        'ACTIVE' => 'Y',
                    ))
                    ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();
                break;

            case 'category_filter_menu':
                $arResult['SHOPS'] = Block\Getter::instance()
                    ->setFilter(array(
                        'IBLOCK_ID' => IBLOCK_SHOPS,
                        'ACTIVE' => 'Y',
                    ))
                    ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();
                if(!empty($arParams['TAG'])){
                    $arResult['TAG'] = $arParams['TAG'];
                }
                break;

            default:
                $arResult['SHOPS'] = Block\Getter::instance()
                    ->setFilter(array(
                        'IBLOCK_ID' => IBLOCK_SHOPS,
                        'ACTIVE' => 'Y',
                    ))
                    ->get();
                break;

        }

        $arResult['TYPES'] = getTypes($arResult['SHOPS']);
        if (empty($arResult['SHOPS'])) {
            throw new Exception('SHOPS');
        }


    } catch (Exception $e) {
        $this->AbortResultCache();
        //define('ERROR_404', true);
        //echo $e->getMessage();
    }
    $this->IncludeComponentTemplate();
}


