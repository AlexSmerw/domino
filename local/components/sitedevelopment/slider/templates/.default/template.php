<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<!--- Slider --->
<section class="slider">
    <div class="flexslider">
        <ul class="slides">

            <? foreach ($arResult['IMAGES'] as $key => $slid) { ?>
                <? if ($key > 4) break; // ибо некрасиво будет выводить больше в таких форматах?>
                <? $url = $slid->getDetailImageThumb(array('width' => 1060, 'height' => 476, 'type' => 'put')); ?>
                <li data-thumb="<?= $url ?>">
                    <img src="<?= $url ?>" alt="<?= $slid->NAME; ?>"/>
                    <?
                    $offerName = '';
                    if ($offerName = $slid->getPropText('OFFER_TITLE')) ?>
                    <div class="slide_text">
                        <div class="slide_title"><?= $offerName ?></div>
                        <div class="slide_byline"><?= $slid->PREVIEW_TEXT ?></div>
                    </div>

                </li>
            <? } ?>

        </ul>
    </div>
</section>
<!--- End Slider --->