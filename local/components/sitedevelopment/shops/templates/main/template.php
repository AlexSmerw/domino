<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="section group">

    <? foreach ($arResult['NEWS'] as $news) { ?>
        <div class="grid_1_of_4 images_1_of_4 main-news-block">
            <a class="fancybox" href="<?= $news->getPreviewImageThumb(array('width' => 800)) ?>"
               data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img
				    style='display:block; margin:0 auto;'
                    src="<?= $news->getPreviewImageThumb(array('width' => 252, 'height' => 157, 'type' => 'put')) ?>"
                    alt="<?= $news->NAME; ?>"/><span> </span></a>

            <h3><?= $news->NAME; ?></h3>

            <p><?= truncate_by_words($news->PREVIEW_TEXT, 30); ?><span><a href="<?= $news->getUrl()?>">[Подробнее]</a></span>
            </p><br>
            <div class="main-news-date">
                <span><?= mb_strtolower($news->getActiveFromDate('j F Y'), 'UTF-8'); ?> </span>
            </div>

        </div>
    <? } ?>

</div>