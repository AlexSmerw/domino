<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?// dv($arResult['MENU']); ?>
<div class="header__mobile-menu js-mobile-menu">
    <div class="mobile-menu">
        <ul class="mobile-menu__first-lvl">
            <? foreach ($arResult['MENU'] as $level1) { ?>
                <li class="mobile-menu__item mobile-menu__item--first-lvl<?= ($level1['CHILDREN']) ? ' mobile-menu__item--dropdown' : '' ?>">
                    <? if ($level1['CHILDREN']) { ?>
                        <div class="mobile-menu__btn js-mobile-menu__btn" data-lvl="first">
                            <div class="wrapper"><?= $level1['TEXT'] ?></div>
                        </div>
                        <? if ($level1['PARAMS']['TYPE'] == 'CATALOG') { ?>
                            <ul class="mobile-menu__second-lvl">
                                <? foreach ($level1['CHILDREN'] as $level2Key => $level2) { ?>
                                    <? if ($level2['PARAMS']['TYPE'] == 'SECTIONS') { ?>
                                        <li class="mobile-menu__item mobile-menu__item--second-lvl mobile-menu__item--dropdown">
                                            <div class="mobile-menu__btn js-mobile-menu__btn" data-lvl="second">
                                                <div class="wrapper"><?= $level2['TEXT'] ?></div>
                                            </div>
                                            <? if ($level2['CHILDREN']) { ?>
                                                <ul class="mobile-menu__third-lvl">
                                                    <? foreach ($level2['CHILDREN'] as $level3) { ?>
                                                        <li class="mobile-menu__item mobile-menu__item--third-lvl">
                                                            <a href="<?= $level3['LINK'] ?>">
                                                                <div class="wrapper"><?= $level3['TEXT'] ?></div>
                                                            </a>
                                                        </li>
                                                    <? } ?>
                                                </ul>
                                            <? } ?>
                                        </li>
                                    <? } ?>
                                <? } ?>
                            </ul>
                        <? } else { ?>
                            <ul class="mobile-menu__second-lvl js-menu-dropdow">
                                <? foreach ($level1['CHILDREN'] as $level2Key => $level2) { ?>
                                    <li class="mobile-menu__item mobile-menu__item--second-lvl mobile-menu__item--link">
                                        <a href="<?= $level2['LINK'] ?>">
                                            <div class="wrapper"><?= $level2['TEXT'] ?></div>
                                        </a>
                                    </li>
                                <? } ?>
                            </ul>
                        <? } ?>
                    <? } else { ?>
                        <a href="<?= $level1['LINK'] ?>">
                            <div class="wrapper"><?= $level1['TEXT'] ?></div>
                        </a>
                    <? } ?>
                </li>
            <? } ?>
        </ul>
    </div>
</div>