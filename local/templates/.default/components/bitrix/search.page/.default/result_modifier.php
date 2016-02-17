<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

//dv($arResult);

if ($arResult['SEARCH']) {
    foreach ($arResult['SEARCH'] as $item) {
        $ids[] = $item['ITEM_ID'];
    }

    if ($ids) {
        $arFilter = array('ACTIVE' => 'Y', 'ID' => $ids);

        /** @var \Bobrov\Entities\Product $item */
        $getter = \BitrixHelperLib\Classes\Block\Getter::instance()
            ->setFilter($arFilter)
            ->setHydrateById(true)
            ->setClassName('Domino\Entities\Product');

        $arResult['CATALOG'] = $getter->get();
        //dv($arResult['CATALOG']);
    }
}