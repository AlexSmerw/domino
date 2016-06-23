<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="content">
<div class="wrap">
    <div class="main">
        <div class="content-new">
            <? $shop = $arResult['SHOPS'];?>
            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2 class="shop-news-title"><?=$arResult['SHOPS']->NAME?></h2>
                    <?
                    if($shop->hasFile('LOGO')){
                        $file = $shop->getFile('LOGO');?>
                        <a class="fancybox" href="<?= call_user_func('cp_get_thumb_url', $file->getUrl(), array('width' => 800)) ?>"
                           data-fancybox-group="gallery" title="<?=$arResult['SHOPS']->NAME?>">
                            <img src="<?=call_user_func('cp_get_thumb_url', $file->getUrl(), array('width' => 250, 'height'=>'200', 'type'=>'put')) ?>"  class="new-image-float-left-200" alt="<?=$arResult['SHOPS']->NAME?>"/>
                        </a>
                    <?} else {?>
                        <a class="fancybox" href="/_html/web/images/no_image.png"
                           data-fancybox-group="gallery" title="<?=$arResult['SHOPS']->NAME?>">
                            <img src="/_html/web/images/no_image.png"  class="new-image-float-left-200" alt="<?=$arResult['SHOPS']->NAME?>"/>
                        </a>
                    <?}?>

                    <p style='min-height: 150px;'><?=$arResult['SHOPS']->PREVIEW_TEXT?>
                    </p>
                    <div class="faqs">

                        <?$files = $arResult['SHOPS']->getFiles('PHOTOS');?>
                        <? if(!empty($files)){?>
                        <!--- Slider --->
                        <section class="slider">
                            <div class="flexslider">
                                <ul class="slides">
                                    <? foreach($files as $image){?>
                                    <li data-thumb="<?=call_user_func('cp_get_thumb_url', $image->getUrl(), array('width' => 50, 'height'=> 40, 'type'=>'put_out')) ?>">
                                        <img src="<?=call_user_func('cp_get_thumb_url', $image->getUrl(), array('width' => 740, 'height'=> 534, 'type'=>'put_out')) ?>" alt=""/>
                                    </li>
                                   <?}?>

                                </ul>
                            </div>
                        </section>
                        <?}?>
                        <!--- End Slider --->
                        <div style="width: 100%; height: 40px;">
                        </div>

                        <h2>Какую мебель мы продаем:</h2>
                        <div class="questions">
                            <?$tags = $arResult['SHOPS']->getPropValue('TYPE')?>
                            <?$keys =  $arResult['SHOPS']->getPropXMLValue('TYPE');
                            $tags = array_combine($keys,$tags);
                            ?>
                            <?foreach($tags as $key => $tag){?>
                                <a href="/shops_list/tag-<?=$key?>/"><span class="span-teg"><h4><?=$tag?></h4></span></a>
                            <?}?>
                        </div>

                    </div>

                </div>

                <div class="rsidebar sidebar">

                    <h2>Описание</h2>
                    <ul class="bg-none">
                        <? $phones = $shop->getPropValue('PHONES') ?>
                        <? if (!empty($phones)) { ?>
                            <li class="no-link-li" style="background:none;"><span>Телефон:</span></li>
                            <? foreach ($phones as $phone) { ?>
                                <li><?= $phone ?></li>
                            <? } ?>
                        <? } ?>
                        <?if($shop->getPropValue('WWW') && !filter_var($shop->getPropValue('WWW'), FILTER_VALIDATE_URL) === false){?>
                            <li class="no-link-li" style="background:none;"><span>Сайт магазина:</span></li>
                            <li><a href="<?= $shop->getPropValue('WWW')?>" target="_blank"><?= $shop->getPropValue('WWW') ?></a></li>
                        <?}?>
                        <? if ($shop->getPropValue('WORK_TIME')) { ?>
                            <li class="no-link-li" style="background:none;"><span>Время работы:</span></li>
                            <li> <?= $shop->getPropValue('WORK_TIME') ?></li>
                        <? } ?>
                        <li class="no-link-li" style="background:none;"><span>Этаж в ТЦ Домино:</span></li>
                        <li><?= $shop->getPropValue('FLOOR') ?>-й</li>
                        <? if ($shop->getPropValue('DELIVERY')) { ?>
                            <li class="no-link-li" style="background:none;"><span>Доставка:</span></li>
                            <li><?= $shop->getPropValue('DELIVERY') ?></li>
                        <? } ?>
                        <? if ($shop->getPropValue('ASSEMBLY')) { ?>
                            <li class="no-link-li" style="background:none;"><span>Сборка:</span></li>
                            <li><?= $shop->getPropValue('ASSEMBLY') ?></li>
                        <? } ?>

                    </ul>

                    <? $APPLICATION->IncludeComponent('sitedevelopment:shops_type','list_menu')?>
                    <div style="height: 30px;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>