<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<p><a class="footer__link footer__link--size-l footer__link--color-white" href="<?= $arResult['LINK'] ?>"><?= $arResult['TEXT'] ?></a></p>
<? foreach ($arResult['CHILDREN'] as $level1Key => $level1) { ?>
    <? if ($level1Key == count($arResult['CHILDREN']) - 1) continue; ?>
    <ul>
        <li><a class="footer__link footer__link--size-m footer__link--color-white" href="<?= $level1['LINK'] ?>"><?= $level1['TEXT'] ?></a></li>
        <? foreach ($level1['CHILDREN'] as $level2) { ?>
            <li><a class="footer__link" href="<?= $level2['LINK'] ?>"><?= $level2['TEXT'] ?></a></li>
        <? } ?>

        <?// выводим последний раздел каталога свернутым ?>
        <? if ($level1Key == 0) { ?>
            <li>
                <a class="footer__link footer__link--size-m footer__link--color-white" href="<?= $arResult['CHILDREN'][count($arResult['CHILDREN']) - 1]['LINK'] ?>">
                    <?= $arResult['CHILDREN'][count($arResult['CHILDREN']) - 1]['TEXT'] ?>
                </a>
            </li>
        <? } ?>
    </ul>
<? } ?>