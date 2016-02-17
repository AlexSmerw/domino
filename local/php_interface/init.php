<?php
define('COMPONENTS_CACHE_TTL', $_SERVER['REMOTE_ADDR'] == '127.0.0.1' ? 0 : 86400);
define('BASE_PATH', dirname(dirname(dirname(__FILE__))));
define('IMG_CACHE_PATH', BASE_PATH . '/resize');
define('LOG_FILENAME', BASE_PATH . '/log/error_log.txt');
define('DS', DIRECTORY_SEPARATOR);

// подключаем библиотеку
include_once BASE_PATH . '/lib/BitrixHelperLib/init.php';
include_once BASE_PATH . '/lib/domino_lib.php';

AddEventHandler('main', 'OnEpilog', 'Redirect404');
function Redirect404() {
    if (!defined('ADMIN_SECTION')
        && defined('ERROR_404')
    ) {
        global $APPLICATION;
        $APPLICATION->RestartBuffer();
        CHTTP::SetStatus('404 Not Found');
        $tplPath = BASE_PATH . '/local/templates/404/';
        include "$tplPath/header.php";
        include "$tplPath/footer.php";
    }
}


