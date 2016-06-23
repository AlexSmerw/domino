<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="col_1_of_3 span_1_of_3">
    <div class="new-products" style='text-align: center;'>
        <h3>Наши магазины</h3>

        <?foreach($arResult['SHOPS'] as $shop){?>
            <?if($shop->hasFile('LOGO')){?>
            <?$file = $shop->getFile('LOGO');?>
        <p><a  href="<?=$shop->getUrl() ?>" data-fancybox-group="gallery" title="<?=$shop->NAME?>">
                <img src="<?=call_user_func('cp_get_thumb_url', $file->getUrl(), array('width' => 336, 'height'=> 214, 'type'=>'put')) ?>"  class="new-image-float-left-200" alt="<?=$shop->NAME?>"/>
                <span> </span></a></p>
                <?}?>
        <?}?>
		<a href='/shops_list/' style='margin-top: 20px; display: block; font-size:13px;'>Все магазины</a>
    </div>
</div>
