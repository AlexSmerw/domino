<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="menu">
    <ul>
        <?foreach($arResult as $level1){?>
            <li class="<?= ($level1['SELECTED']) ? 'active' : '' ?>"><a href="<?= $level1['LINK'] ?>"><?= $level1['TEXT'] ?></a></li>
        <?}?>
        <div class="clear"></div>
    </ul>
</div>