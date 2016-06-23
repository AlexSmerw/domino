<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="col_1_of_4 span_1_of_4">
    <h3>Навигация</h3>
    <ul>
        <?foreach($arResult as $level1){?>
            <li><a href="<?= $level1['LINK'] ?>"><?= $level1['TEXT'] ?></a></li>
        <?}?>

    </ul>
</div>