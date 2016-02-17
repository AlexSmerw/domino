<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<section class="catalog__content">
    <? if ($arResult['SEARCH']) { ?>
        <h1>Поиск по «<?= $arResult['REQUEST']['QUERY'] ?>»</h1>

        <div class="tabulator tabulator--type-three js-tabulator">
            <div class="tabulator__content">
                <div class="tabulator__inset js-tab-ctn js-search-tab-ctx _active" data-tab-ctn="all_goods">
                    <div class="goods js-tab-ajax" data-filter-tab="goods">
                        <ul class="goods__list js-popup-gallery">
                            <? foreach ($arResult['SEARCH'] as $item) { ?>
                                <li class="goods__item js-gallery-item js-search-item">
                                    <div class="goods__view">
                                        <img src="<?=$arResult['CATALOG'][$item['ITEM_ID']]->getDetailImageThumb(array('width' => 210, 'height' => 210));?>" alt="<?= $item['TITLE'] ?>">
                                        <p>
                                            <a href="<?= $item['URL'] ?>" class="link">
                                                <span class="js-gallery-title js-search-title"><?= $item['TITLE'] ?></span>
                                            </a>
                                        </p>
                                        <? if($flags = $arResult['CATALOG'][$item['ITEM_ID']]->getPropValue('FLAGS')) { ?>
                                        <? foreach($flags as $flag) { ?>
                                        <? if(!$flag) continue ?>
                                                <div class="goods__tag tag--<?= \Bobrov\Registry::getFlagColorByName($flag) ?><? if(\Bobrov\Registry::isFlagLeftByName($flag)) { ?> goods__tag--left<? } ?>"><?= $flag ?></div>
                                        <? } ?>
                                        <? } ?>
                                    </div>
                                    <div class="goods__hover">
                                        <div class="goods__options">
                                            <div class="l-table">
                                                <div class="l-table__cell">
                                                    <a href="<?=$arResult['CATALOG'][$item['ITEM_ID']]->getDetailImageThumb(array('height' => 550));?>" class="goods__btn goods__btn--zoom js-gallery-link">Увеличить</a>
                                                    <div class="goods__btn goods__btn--compare js-compare-btn" data-product="<?= $item['ITEM_ID'] ?>">
                                                        <i class="icon icon-plus"></i><span>К сравнению</span><a href="/compare/">Перейти к сравнению</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            <? } ?>

                            <li class="goods__item js-gallery-item js-search-item-cap">
                            <li class="goods__item js-gallery-item js-search-item-cap">
                            <li class="goods__item js-gallery-item js-search-item-cap">
                        </ul>
                        <?/*<ul class="goods__pagination">
                            <li><a href="#!" class="_current js-page">1</a></li>
                            <li><a href="#!" class="js-page">2</a></li>
                            <li><a href="#!" class="js-page">3</a></li>
                            <li><a href="#!" class="js-page">4</a></li>
                        </ul>*/?>
                        <?= $arResult["NAV_STRING"] ?>
                    </div>
                </div>
            </div>
        </div>
    <? } else { ?>
        <h1>Ничего не найдено</h1>
    <? } ?>
</section>