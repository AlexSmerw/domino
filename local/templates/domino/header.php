<?
$APPLICATION->SetTitle('О нас');
?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?> — ТЦ Домино</title>
<meta name='yandex-verification' content='5cd24cca70357f3a' />
    <? $APPLICATION->ShowMeta('keywords'); ?>
    <? $APPLICATION->ShowMeta('description'); ?>
    <? //$APPLICATION->ShowHead() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="/web/css/flexslider.css" type="text/css" media="screen"/>
    <link href="http://fonts.googleapis.com/css?family=Coda" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/web/css/examples.css" type="text/css" media="all"/>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <!-- FlexSlider -->
    <script defer src="/web/js/jquery.flexslider.js"></script>
    <? if (strpos($GLOBALS['APPLICATION']->GetCurDir(), 'news') !== false || strpos($GLOBALS['APPLICATION']->GetCurDir(), 'shops_list') !== false) { ?>
        <script defer src="/web/js/dinamicLoadArticle.js"></script>
        <script type="text/javascript">
            <?php
				if(strpos($GLOBALS['APPLICATION']->GetCurDir(), 'news') !== false){
                 $ajaxSendTo = '/ajax/getNews.php';
				}
			if(strpos($GLOBALS['APPLICATION']->GetCurDir(), 'shops_list') !== false){
              $ajaxSendTo = '/ajax/shops.php';
            }
            ?>
            ajaxSendPage = "<?=$ajaxSendTo?>";
        </script>
	<link rel="stylesheet" href="/web/css/sol.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
	<script type="text/javascript" src="/web/js/sol.js"></script>
    <? } ?>
    <? if ($GLOBALS['APPLICATION']->GetCurDir() == '/rent/'){ ?>
        <script src="/web/js/jquery-ui/jquery-ui.js"></script>
        <script src="/web/js/popup/jquery.popupoverlay.js"></script>
    <?} ?>

    <? if (isIndex()) { ?>
        <script type="text/javascript">
            $(function () {
                SyntaxHighlighter.all();
            });
            $(window).load(function () {
                $('.flexslider').flexslider({
                    animation: "slide",
                    controlNav: "thumbnails",
                    start: function (slider) {
                        $('body').removeClass('loading');
                    }
                });
            });
        </script>
    <? } ?>
    <? if (strpos($GLOBALS['APPLICATION']->GetCurDir(), shops_list) !== false) { ?>
    <script type="text/javascript">

        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",

                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
    <?}?>
        <!-- light-box -->

        <script type="text/javascript" src="/web/js/jquery.mousewheel-3.0.6.pack.js"></script>
        <script type="text/javascript" src="/web/js/jquery.fancybox.js"></script>
        <link rel="stylesheet" type="text/css" href="/web/css/jquery.fancybox.css" media="screen"/>
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 *  Simple image gallery. Uses default settings
                 */

                $('.fancybox').fancybox();

            });
        </script>

</head>
<body>

<div class="header">
    <div class="header_top">
        <div class="wrap">
            <div class="social-icons">
                <ul>
                    <li><a class="facebook" href="#" target="_blank"> </a></li>
                    <li><a class="twitter" href="#" target="_blank"></a></li>
                    <li><a class="googleplus" href="#" target="_blank"></a></li>
                    <li><a class="pinterest" href="#" target="_blank"></a></li>
                    <li><a class="dribbble" href="#" target="_blank"></a></li>
                    <li><a class="vimeo" href="#" target="_blank"></a></li>
                    <div class="clear"></div>
                </ul>
            </div>

            <? $APPLICATION->IncludeComponent(
                'bitrix:menu',
                'top',
                array(
                    'ROOT_MENU_TYPE' => 'top',
                    'CHILD_MENU_TYPE' => 'sub',
                    'USE_EXT' => 'Y',
                    'MAX_LEVEL' => 1,
                    'MENU_CACHE_TYPE' => 'A',
                    'MENU_CACHE_TIME' => COMPONENTS_CACHE_TTL,
                )
            ); ?>

            <div class="clear"></div>
        </div>
    </div>
    <div class="logo"
        <? if (isIndex()) { ?>
            style="padding-bottom: 30px;"
        <?}?>
        >
        <div class="domino-logo">
            <a href="/index.php"><span class="domino-span"><img src="/web/images/logo.png" alt="Мебельный Центр Домино"></a>

     <? $APPLICATION->IncludeComponent('sitedevelopment:contacts', 'top')?>
        </div>
    </div>
    <div class="header_bottom">
        <div class="wrap">
            <? if (isIndex()) { ?>
                <? $APPLICATION->IncludeComponent('sitedevelopment:slider') ?>
            <? } ?>
        </div>
    </div>
</div>