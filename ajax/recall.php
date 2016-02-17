<?php
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$APPLICATION->IncludeComponent('BitrixHelperLib:recall', 'ajax', array('IBLOCK_ID' => 19));