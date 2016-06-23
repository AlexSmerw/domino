<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="wrap">
    <div class="main">
        <div class="content">

            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2>Мебельный Торговый Центр Домино</h2>
                    <div class="about-img">
                        <? if($arResult['ITEM']->hasPreviewImage()){ ?>
                            <img  class='image-about' src="<?=$arResult['ITEM']->getPreviewImageThumb(array('width' => 767))?>" alt=""/>
                        <?}?>

                    </div>
                    <p><?= $arResult['ITEM']->DETAIL_TEXT ?></p>
					<? if(false){ ?>
                    <div class="faqs">
                        <h2>Наши преимущества</h2>
                        <?$advantages = $arResult['ITEM']->getPropText('ADVANTAGES');?>
                        <?$description = $arResult['ITEM']->getPropDescription('ADVANTAGES');?>
                        <? foreach($advantages as $key => $advantage){?>
                        <div class="questions">
                            <h4><?= $description[$key] ?></h4>
                            <p><?= htmlspecialchars_decode($advantage['TEXT'])?></p>
                        </div>
                       <?}?>
                    </div>
					<?}?>

                   </div>
<? if(false){ ?>
                <div class="rsidebar sidebar">

                    <h2>Что мы предлагаем</h2>
                    <ul>
                        <?foreach($arResult['ITEM']->getPropText('OFFERS') as $offer){?>
                            <li><?=$offer?></li>
                        <?}?>
                    </ul>


                </div>
	<?}?>
 <? $APPLICATION->IncludeComponent('sitedevelopment:shops_type')?>
                <br>



            </div>
        </div>
    </div>
</div>