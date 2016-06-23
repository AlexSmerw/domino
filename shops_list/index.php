<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Магазины тц Домино");
?>
<div class="wrap">
    <div class="main">


            <!--<div class="questions">
                <a href="/"><span class="span-teg"><h4>Офиснаая мебель</h4></span></a>
                <a href="/"><span class="span-teg"><h4>Корпусная мебель</h4></span></a>
                <a href="/"><span class="span-teg"><h4>Детская мебель</h4></span></a>
                <a href="/"><span class="span-teg"><h4>Офиснаая</h4></span></a>
            </div>-->

<? $APPLICATION->IncludeComponent('sitedevelopment:shops') ?>

        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
