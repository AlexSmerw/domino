<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<?// dv($arResult['MENU']); ?>
<nav class="header__menu">
    <ul class="menu fz">
        <? foreach ($arResult['MENU'] as $level1) { ?>
            <li class="menu__item<?= ($level1['CHILDREN']) ? ' menu__item--dropdown' : '' ?><?= ($level1['SELECTED']) ? ' menu__item--active' : '' ?>">
                <a href="<?= $level1['LINK'] ?>" class="menu__link">
                    <span class="menu__text"><?= $level1['TEXT'] ?></span>
                </a>
                <? if ($level1['CHILDREN']) { ?>
                    <div class="menu__dropdown">
                        <? if ($level1['PARAMS']['TYPE'] == 'CATALOG') { ?>
                            <? foreach ($level1['CHILDREN'] as $level2Key => $level2) { ?>
                                <? if ($level2['PARAMS']['TYPE'] == 'SECTIONS') { ?>
                                    <article class="dropdown-menu<?= ($level2Key == count($level1['CHILDREN']) - 1) ? ' dropdown-menu--pb-105' : '' ?>">
                                        <h2><a href="<?= $level2['LINK'] ?>"><?= $level2['TEXT'] ?></a></h2>
                                        <? if ($level2['CHILDREN']) { ?>
                                            <ul class="dropdown-menu__list">
                                                <? foreach ($level2['CHILDREN'] as $level3) { ?>
                                                    <li class="dropdown-menu__item">
                                                        <a href="<?= $level3['LINK'] ?>"><?= $level3['TEXT'] ?></a>
                                                    </li>
                                                <? } ?>
                                            </ul>
                                        <? } ?>
                                        <? if ($level2Key == count($level1['CHILDREN']) - 1) { ?>
                                            <footer class="dropdown-menu__footer">
                                                <? foreach ($arResult['CATALOG_EXTRA'] as $extraItem) { ?>
                                                    <p><a href="<?= $extraItem['LINK'] ?>"><?= $extraItem['TEXT'] ?></a></p>
                                                <? } ?>
                                            </footer>
                                        <? } ?>
                                    </article>
                                <? } ?>
                            <? } ?>
                        <? } else { ?>
                            <article class="dropdown-menu">
                                <ul class="dropdown-menu__list">
                                    <? foreach ($level1['CHILDREN'] as $level2Key => $level2) { ?>
                                        <li class="dropdown-menu__item">
                                            <a href="<?= $level2['LINK'] ?>"><?= $level2['TEXT'] ?></a>
                                        </li>
                                        <? if ($level1['PARAMS']['TYPE'] == 'PRODUCERS' && $level2Key == floor(count($level1['CHILDREN']) / 2)) { ?>
                                            </ul></article><article class="dropdown-menu"><ul class="dropdown-menu__list">
                                        <? } ?>
                                    <? } ?>
                                </ul>
                            </article>
                        <? } ?>
                    </div>
                <? } ?>
            </li>
        <? } ?>
    </ul>
</nav>