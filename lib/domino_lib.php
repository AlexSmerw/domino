<?php
use BitrixHelperLib\Classes\Block;
define('MIN_TIME', 5); // second
define('IBLOCK_TEXT', 9);
define('IBLOCK_SLIDER', 1);
define('IBLOCK_ADVANTAGES', 2);
define('IBLOCK_DOMINO_MAIN', 3);
define('IBLOCK_NEWS', 4);
define('IBLOCK_SHOPS', 5);
define('IBLOCK_CONTACTS', 6);
define('IBLOCK_RENT', 7);
define('IBLOCK_FORM_RENT', 8);
define('IBLOCK_FORM_FEEDBACK', 10);

\CModule::IncludeModule('main');

function isIndex()
{
    return ($GLOBALS['APPLICATION']->GetCurDir() == SITE_DIR) ? true : false;
}

function getTypes($shops)
{
    $result = array();
    foreach ($shops as $shop) {
        $tags = $shop->getPropValue('TYPE');
        $keys = $shop->getPropXMLValue('TYPE');
        $tags = array_combine($keys, $tags);
        $result = array_merge($result, $tags);
    }
    return $result;

}

class ExceptionRedirect extends Exception
{
}

;





