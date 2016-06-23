<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="wrap">
    <div class="main">
        <div class="content-new">

            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2 class="shop-news-title"><?=$arResult['NEWS']->NAME?></h2>
                    <p style="text-align: right; margin: 0px 10px;"> <?= mb_strtolower($arResult['NEWS']->getActiveFromDate('j F Y'), 'UTF-8'); ?> </p>
                    <a class="fancybox" href="<?= $arResult['NEWS']->getPreviewImageThumb(array('width' => 800)) ?>"
                       data-fancybox-group="gallery" title="<?=$arResult['NEWS']->NAME?>">
                    <img src="<?= $arResult['NEWS']->getPreviewImageThumb(array('width' => 450)) ?>"  class="new-image-float-left" alt="<?=$arResult['NEWS']->NAME?>"/>
                        </a>
                    <p><?=$arResult['NEWS']->PREVIEW_TEXT?>
                    </p>
                    <div class="faqs">

                        <div class="news-footer">
                            <a href="/news/">Все новости</a>
                        </div>

                    </div>

                </div>
                <div class="rsidebar sidebar">
                    <? $APPLICATION->IncludeComponent('sitedevelopment:shops_type','list_menu')?>
                    <div style="height: 30px;"></div>

                </div>
            </div>
        </div>
    </div>
</div>
