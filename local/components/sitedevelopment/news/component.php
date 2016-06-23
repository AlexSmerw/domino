<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use BitrixHelperLib\Classes\Block;

$arParams['CODE'] = (isset($_REQUEST['CODE'])) ? trim($_REQUEST['CODE']) : null;
if($this->GetTemplateName() == 'ajax'){
    if( empty($_SESSION['PAGE_NUMBER'])){
        $_SESSION['PAGE_NUMBER'] = 3;
    }else{
        $_SESSION['PAGE_NUMBER']++ ;
    }
}
$arParams['PAGE_NUMBER'] = $_SESSION['PAGE_NUMBER'];
if ($this->StartResultCache(COMPONENTS_CACHE_TTL)) {
    $template = '';
    switch ($this->GetTemplateName()) {
        case "main":
            try {
                /* Вывод 4х новостей на главной*/
                $arResult['NEWS'] = Block\Getter::instance()
                    ->setFilter(array(
                        'IBLOCK_ID' => IBLOCK_NEWS,
                        'ACTIVE' => 'Y',
                    ))
                    ->setPageSize(4)
                    ->setPageNum(1)
                    ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();

                if (empty($arResult['NEWS'])) {
                    throw new Exception('No NEWS');
                }

            }catch (Exception $e) {
            $this->AbortResultCache();
        }
        break;

        case "ajax":
            try {

                $getter = Block\Getter::instance()
                    ->setFilter(
                        array('IBLOCK_ID' => IBLOCK_NEWS,
                            'ACTIVE' => 'Y'
                        ));

                $arResult['NEWS'] = $getter->setPageNum($arParams['PAGE_NUMBER'])
                    ->setPageSize(4)
                    ->setPageNum($arParams['PAGE_NUMBER'])
                    ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                    ->get();

                $pg = $getter->getPagingObject();

                if ($pg->total_pages < $arParams['PAGE_NUMBER']) {
                    $arResult['NEWS'] = array();
                }


                if (empty($arResult['NEWS'])) {
                    throw new Exception('No NEWS');
                }

            }catch (Exception $e) {
                $this->AbortResultCache();
            }
            break;

        default:
            $_SESSION['PAGE_NUMBER'] = 0;
            try {
                if (empty($arParams['CODE'])) {
                    /* Вывод всех новостей */
                    $arResult['NEWS'] = Block\Getter::instance()
                        ->setFilter(array(
                            'IBLOCK_ID' => IBLOCK_NEWS,
                            'ACTIVE' => 'Y',
                        ))
                        ->setOrder(array('DATE_ACTIVE_FROM' => 'DESC'))
                        ->setPageSize(8)
                        ->setPageNum(1)
                        ->get();

                    if (empty($arResult['NEWS'])) {
                        throw new Exception('No NEWS');
                    }

                } else {
                    /* Вывод одной новости*/
                    $arResult['NEWS'] = Block\Getter::instance()
                        ->setFilter(array(
                            'IBLOCK_ID' => IBLOCK_NEWS,
                            'ACTIVE' => 'Y',
                        ))
                        ->getByCode($arParams['CODE']);
                    if (empty($arResult['NEWS'])) {
                        throw new Exception404('No NEWS');
                    }
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

