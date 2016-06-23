<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости тц Домино");
?>
<div class="wrap">
    <div class="main">
        <div class="content">
            <? $APPLICATION->IncludeComponent('sitedevelopment:news') ?>
        </div>
    </div>
</div>


<div id="page-preloader"><span class="spinner"></span></div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
