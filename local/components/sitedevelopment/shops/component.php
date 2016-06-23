<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use BitrixHelperLib\Classes\Block;

$arParams['CODE'] = (isset($_REQUEST['CODE'])) ? trim($_REQUEST['CODE']) : null;
$arParams['TYPE'] = (isset($_REQUEST['TYPE'])) ? trim($_REQUEST['TYPE']) : null;
if($this->GetTemplateName() == 'ajax'){
    if( empty($_SESSION['PAGE_NUMBER_SHOP'])){
        $_SESSION['PAGE_NUMBER_SHOP'] = 3;
    }else{
        $_SESSION['PAGE_NUMBER_SHOP']++ ;
    }
}
$arParams['PAGE_NUMBER_SHOP'] = $_SESSION['PAGE_NUMBER_SHOP'];
if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
    $template = '';
    switch ($this->GetTemplateName()) {
        case "MAIN":
            try {
                /* Вывод 4х новостей на главной*/
                $arResult['SHOPS'] = Block\Getter::instance()
                    ->setFilter(array(
                        'IBLOCK_ID' => IBLOCK_SHOPS,
                        'ACTIVE' => 'Y',
                    ))
                    ->setPageSize(4)
                    ->setPageNum(1)
                    ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();

                if (empty($arResult['SHOPS'])) {
                    throw new Exception('No SHOPS');
                }

            }catch (Exception $e) {
            $this->AbortResultCache();
        }
        break;

        case "ajax":
            try {

                $getter = Block\Getter::instance()
                    ->setFilter(
                        array('IBLOCK_ID' => IBLOCK_SHOPS,
                            'ACTIVE' => 'Y'
                        ));

                $arResult['SHOPS'] = $getter->setPageNum($arParams['PAGE_NUMBER_SHOP'])
                    ->setPageSize(4)
                    ->setPageNum($arParams['PAGE_NUMBER_SHOP'])
                    ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();

                $pg = $getter->getPagingObject();

                if ($pg->total_pages < $arParams['PAGE_NUMBER_SHOP']) {
                    $arResult['SHOPS'] = array();
                }


                if (empty($arResult['SHOPS'])) {
                    throw new Exception('No SHOPS');
                }

            }catch (Exception $e) {
                $this->AbortResultCache();
            }
            break;

        default:
            $_SESSION['PAGE_NUMBER_SHOP'] = 0;
            try {
                if (empty($arParams['CODE'])) {
                    /* Вывод всех */

                    if (!empty($arParams['TYPE'])) {
                        $arResult['TAG'] = $arParams['TYPE'];
                        $paramsId = \Domino\Registry::getItemsFlagsIds('TYPE',IBLOCK_SHOPS);
                        $paramKey = $paramsId[$arParams['TYPE']];
                        $arResult['SHOPS'] = Block\Getter::instance()
                            ->setFilter(array(
                                'IBLOCK_ID' => IBLOCK_SHOPS,
                                'ACTIVE' => 'Y',
                                'PROPERTY_TYPE' => array($paramKey)
                            ))
                            ->setPageSize(8)
                            ->setPageNum(1)
                            ->get();

                    } else{
                        $arResult['SHOPS'] = Block\Getter::instance()
                            ->setFilter(array(
                                'IBLOCK_ID' => IBLOCK_SHOPS,
                                'ACTIVE' => 'Y',
                            ))
                            ->setPageSize(8)
                            ->setPageNum(1)
                            ->get();
                }


                    if (empty($arResult['SHOPS'])) {
                        throw new Exception('No SHOPS');
                    }

                } else {
                    /* Вывод одного*/
                    $arResult['SHOPS'] = Block\Getter::instance()
                        ->setFilter(array(
                            'IBLOCK_ID' => IBLOCK_SHOPS,
                            'ACTIVE' => 'Y',
                        ))
                        ->getByCode($arParams['CODE']);
                    if (empty($arResult['SHOPS'])) {
                        throw new Exception404('No SHOPS');
                    }
$arResult['TITLE'] = $arResult['SHOPS']->NAME;
                    $template = 'item';
                }
            } catch (Exception404 $e) {
                $this->AbortResultCache();
                 define('ERROR_404', true);
                //echo $e->getMessage();
            }catch (Exception $e) {
                $this->AbortResultCache();
                //define('ERROR_404', true);
                //echo $e->getMessage();
            }
            break;

    }
    $this->IncludeComponentTemplate($template);
}

if($arResult['TITLE']) $APPLICATION->SetTitle($arResult['TITLE']);
