<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Мебельный Центр Домино');
$APPLICATION->SetPageProperty('description', 'Мебельный Торговый Центр Домино в Севастополе. Аренда помещений под мебельный магазин. Продажа мебели, ковров, фурнитуры в Севастополе. Все мебельные магазины в Севастополе под одной крышей.');
?>



<div class="wrap">
    <div class="main">
        <div class="content">
            <? $APPLICATION->IncludeComponent('sitedevelopment:advantages')?>
            <div class="content-bottom">
                <div class="section group">
                   <? $APPLICATION->IncludeComponent('sitedevelopment:shops_type')?>

                    <? $APPLICATION->IncludeComponent('sitedevelopment:domino_main') ?>

                   <? $APPLICATION->IncludeComponent('sitedevelopment:shops_type','preview')?>
                </div>
            </div>

           <? $APPLICATION->IncludeComponent('sitedevelopment:news','main')?>
        </div>

    </div>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>