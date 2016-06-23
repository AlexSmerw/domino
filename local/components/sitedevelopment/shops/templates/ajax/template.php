<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<? if(!empty($arResult['SHOPS'])){?>
<div class="section group">

    <? foreach ($arResult['SHOPS'] as $news) { ?>
        <div class="grid_1_of_4 images_1_of_4 main-news-block">
            <?
            if($news->hasFile('LOGO')){
                $file = $news->getFile('LOGO');?>
                <a  href="<?= $news->getUrl() ?>"><img
				style='display:block; margin:0 auto;'
                        src="<?=call_user_func('cp_get_thumb_url', $file->getUrl(), array('width' => 252, 'height' => 157, 'type' => 'put')) ?>"
                        alt=""/></a>
            <?} else {?>
                <a  href="/_html/web/images/no_image.png"><img
                        src="/_html/web/images/no_image.png"
                        alt="<?= $news->NAME; ?>"/></a>
            <?}?>
            <a href="<?= $news->getUrl() ?>"><h3><?= $news->NAME; ?></h3></a>

            <p><?= truncate_by_words($news->PREVIEW_TEXT, 25); ?><span><a
                        href="<?= $news->getUrl() ?>">[Подробнее]</a></span></p>
            <br>

        </div>
    <? } ?>

</div>
<?}?>