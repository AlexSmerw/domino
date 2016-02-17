<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="footer__accordeon">
    <ul class="accordeon">
        <? foreach ($arResult['MENU'] as $level1) { ?>
            <li class="accordeon__item accordeon__item--first-lvl<?= ($level1['CHILDREN']) ? ' accordeon__item--dropdown' : '' ?>">
                <a href="<?= $level1['LINK'] ?>"><?= $level1['TEXT'] ?></a>
                <? if ($level1['PARAMS']['TYPE'] == 'CATALOG') { ?>
                    <ul class="accordeon__dropdown">
                        <? foreach ($level1['CHILDREN'] as $level2) { ?>
                            <? if ($level2['PARAMS']['TYPE'] == 'SECTIONS') { ?>
                                <li class="accordeon__item accordeon__item--second-lvl">
                                    <a href="<?= $level2['LINK'] ?>"><?= $level2['TEXT'] ?></a>
                                </li>
                            <? } ?>
                        <? } ?>
                    </ul>
                <? } ?>
            </li>
        <? } ?>
    </ul>
</div>