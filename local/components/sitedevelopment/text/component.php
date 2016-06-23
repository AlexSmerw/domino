<?
use \BitrixHelperLib\Classes\Block;

if ($this->StartResultCache(COMPONENTS_CACHE_TTL))
{
    $arResult['ITEM'] = Block\Getter::instance()
        ->setFilter(array('IBLOCK_ID' => IBLOCK_TEXT, 'ACTIVE' => 'Y', 'ACTIVE_DATE' => 'Y', 'CODE' => $arParams['CODE']))
        ->setNavStartParams(array('nTopCount' => 1))
        ->getOne();

    $this->SetResultCacheKeys(array());
    $this->IncludeComponentTemplate();
}