<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>



<div class="questions">
<select id="my-select" name="tags" multiple="multiple">
   <?  foreach($arResult['TYPES'] as $key => $tag){?>
	<? if(!empty($arParams['CURRENT_TAG']) && $arParams['CURRENT_TAG'] == $key){
            $selected = 'selected';
	}else{
			$selected = '';
			}
			?>
       <option value="<?=$key?>" <?=$selected?>><?=$tag?></option>    
   <?}?>

</select>
<script type="text/javascript">
    $(function() {
        // initialize sol
		$('#my-select').searchableOptionList({
    maxHeight: '250px',
    texts: {
            noItemsAvailable: 'Go on, nothing to see here',
            selectAll: 'Выбрать все',
            selectNone: 'Очисть',
            searchplaceholder: 'Выберите категорию магазинов для поиска'
		   }
});
    });
</script>

</div>