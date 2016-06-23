<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="content">
<h2>Магазины на территории ТЦ Домино</h2><br>
<? $APPLICATION->IncludeComponent('sitedevelopment:shops_type','category_filter_menu', array('CURRENT_TAG'=> $arResult['TAG']))?>
<? $i = 0;
    $count = count($arResult['SHOPS']);
?>
<? foreach ($arResult['SHOPS'] as $key => $news) { ?>
    <? if ($i == 0) { ?>
        <div class="section group">
    <? } ?>

    <div class="grid_1_of_4 images_1_of_4 main-news-block">
        <?
        if($news->hasFile('LOGO')){
        $file = $news->getFile('LOGO');?>
        <a  href="<?= $news->getUrl() ?>"><img
				style='display:block; margin:0 auto;'
                src="<?=call_user_func('cp_get_thumb_url', $file->getUrl(), array('width' => 252, 'height' => 157, 'type' => 'put')) ?>"
                alt=""/></a>
        <?} else {?>
            <a  href="<?= $news->getUrl() ?>"><img
                    src="/_html/web/images/no_image.png"
                    alt="<?= $news->NAME; ?>"/></a>
        <?}?>
        <a href="<?= $news->getUrl() ?>"><h3><?= $news->NAME; ?></h3></a>

        <p><?= truncate_by_words($news->PREVIEW_TEXT, 25); ?><span><a
                    href="<?= $news->getUrl() ?>">[Подробнее]</a></span></p>
        <br>

    </div>


    <? if ($i == 3 || $key == $count-1 ) { ?>
        </div>
    <? } ?>
    <? $i = ($i == 3) ? 0 : $i + 1; ?>
<? } ?>
</div>
<div class="mobile-shop-button"><span><input type="submit" value="Показать еще" id="more-shop"></span></div>

