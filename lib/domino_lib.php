<?php
use BitrixHelperLib\Classes\Block;

define('IBLOCK_TEXT', 100);
define('IBLOCK_SLIDER', 1);
define('IBLOCK_ADVANTAGES', 2);

\CModule::IncludeModule('main');

function isIndex()
{
    return ($GLOBALS['APPLICATION']->GetCurDir() == SITE_DIR) ? true : false;
}


class ExceptionRedirect extends Exception
{
}

;





