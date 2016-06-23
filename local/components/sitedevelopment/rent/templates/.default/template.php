<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="section group">

    <? foreach($arResult['RENT'] as $rent) {?>
    <div class="image group">
        <div class="grid images_3_of_1">

            <? if($rent->hasDetailImage()){?>
                <a class="fancybox" href="<?= $rent->getDetailImageThumb(array('width'=>800)) ?>"
                   data-fancybox-group="gallery" title="<?=$rent->NAME?>">
                    <img src="<?=$rent->getDetailImageThumb(array('width'=>225)) ?>"  class="new-image-float-left-200" alt="<?=$rent->NAME?>"/>
                </a>
            <?}else{?>
                <img src="/web/images/no-image.png" alt=""/>
            <?}?>
        </div>
        <div class="grid blog">
            <h3><?= $rent->NAME?></h3>
            <p><?= $rent->DETAIL_TEXT?></p>

            <div class="available">
                <p><b class="bold-font">Площадь :</b> <span class="area"><?= is_numeric($rent->getPropValue('AREA')) ? $rent->getPropValue('AREA').' кв.м.' : $rent->getPropValue('AREA')  ?></span></p>
            </div>

            <div class="price">
                <p><b class="bold-font">Стоимсоть в месяц:</b>
                    <? if($rent->getPropValue('PRICE')){?>
                        <span class="prices"><?= $rent->getPropValue('PRICE')?> </span>
                    <?}else{?>
                        <span class="prices">Уточняйте</span>
                            <?}?>
                    </p>
            </div>


            <div class="available">
                <p><b class="bold-font">Этаж:</b> <span class="floor"><?= $rent->getPropValue('FLOOR')?> й</span></p>
            </div>
            <div class="add-cart">
                <div class="button"><span><a class="initialism fade_open btn btn-success submit" href="#fade">Арендовать</a></span></div>

            </div>
        </div>
    </div>
    <?}?>

</div>
