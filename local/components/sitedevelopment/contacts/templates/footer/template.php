<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>


<div class="col_1_of_4 span_1_of_4">
    <h3>Контакты</h3>
    <ul>

        <li>ТЦ Домино</li>
        <li>Севастополь</li>
        <li><span>Адрес :</span> <?= $arResult['CONTACTS']->getPropValue('ADDRESS')?></li>
        <li><span>E-mail :</span> <?= $arResult['CONTACTS']->getPropValue('EMAIL')?></li>

        <? $phones = $arResult['CONTACTS']->getPropValue('PHONES') ?>
        <? if (!empty($phones)) { ?>

            <? foreach ($phones as $phone) { ?>
                <li><span>Телефон:</span>
                <?= $phone ?>
                </li>
            <? } ?>

        <? } ?>
        <li><a href="/contacts/"> Подробнее </a></li>
    </ul>
</div>