<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="content_top">
    <div class="section group">
        <? foreach ($arResult['ADVANTAGES'] as $key => $advantage) { ?>
            <? if ($key > 3) break; ?>
            <div class="col_1_of_4 span_1_of_4">
                <div class="num-heading">
                    <div class="number">
                        <figure><span><?= $key + 1 ?></span></figure>
                    </div>
                    <div class="heading">
                        <h4><?= $advantage->NAME ?></h4>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="heading-desc">
                    <p><?= truncate_by_words($advantage->PREVIEW_TEXT, 20) ?></p>
                </div>
            </div>
        <? } ?>
    </div>
</div>