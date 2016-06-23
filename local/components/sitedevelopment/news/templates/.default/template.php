<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>


<? $i = 0;
    $count = count($arResult['NEWS']);
?>
<? foreach ($arResult['NEWS'] as $key => $news) { ?>
    <? if ($i == 0) { ?>
        <div class="section group">
    <? } ?>

    <div class="grid_1_of_4 images_1_of_4 main-news-block">

        <a href="<?= $news->getUrl() ?>"><img
                src="<?= $news->getPreviewImageThumb(array('width' => 252, 'height' => 157, 'type' => 'put_out')) ?>"
                alt=""/></a>
		<a href="<?= $news->getUrl() ?>"><h3 style='min-height:44px;'><?= $news->NAME; ?></h3></a>

        <p><?= truncate_by_words($news->PREVIEW_TEXT, 20); ?><span><a
                    href="<?= $news->getUrl() ?>">[Подробнее]</a></span></p>
        <br>

        <div class="main-news-date">
            <span><?= mb_strtolower($news->getActiveFromDate('j F Y'), 'UTF-8'); ?> </span>
        </div>

    </div>

    <? if ($i == 3 || $key == $count-1 ) { ?>
        </div>
    <? } ?>
    <? $i = ($i == 3) ? 0 : $i + 1; ?>
<? } ?>


