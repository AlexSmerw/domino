<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE HTML>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?> — Domino</title>
    <? $APPLICATION->ShowMeta('keywords'); ?>
    <? $APPLICATION->ShowMeta('description'); ?>
    <? //$APPLICATION->ShowHead() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="web/css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="web/css/flexslider.css" type="text/css" media="screen"/>
    <link href="http://fonts.googleapis.com/css?family=Coda" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Milonga' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="web/css/examples.css" type="text/css" media="all"/>
    <script src="web/js/jquery-1.8.1.min.js"></script>
    <!-- FlexSlider -->
    <script defer src="web/js/jquery.flexslider.js"></script>
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
    <!-- light-box -->
    <script type="text/javascript" src="web/js/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="web/js/jquery.mousewheel-3.0.6.pack.js"></script>
    <script type="text/javascript" src="web/js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="web/css/jquery.fancybox.css" media="screen"/>
    <script type="text/javascript">
        $(document).ready(function () {
            /*
             *  Simple image gallery. Uses default settings
             */

            $('.fancybox').fancybox();

        });
    </script>
</head>