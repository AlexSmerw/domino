<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="work-time">
    <b>г.Севастополь</b> <br>
    <b>Время работы :</b> c <span><?= $arResult['CONTACTS']->getPropValue('WORK_TIME_FROM') ?></span> до
    <span><?= $arResult['CONTACTS']->getPropValue('WORK_TIME_TO') ?></span>
    <br>
    <? $holidays = $arResult['CONTACTS']->getPropValue('HOLIDAYS');
       $holidayTime = $arResult['CONTACTS']->getPropDescription('HOLIDAYS');
    foreach ($holidays as $key => $hd) {
        if (strtotime(date("Y-m-d") . "+3 days") >= strtotime($hd) && strtotime(date("Y-m-d")) <= strtotime($hd)) {
            ?>
            <? if ($holidayTime[$key] == "" || (stripos('Выходной', $holidayTime[$key]) !== false)) { ?>
                <?= $hd ?>  - Выходной день
            <? } else { ?>
                <?= $hd ?>  - <?= $holidayTime[$key] ?>
            <?
            } ?>
            <? break; ?>
        <?
        }
    }
    ?>


</div>