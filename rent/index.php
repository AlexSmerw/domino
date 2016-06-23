<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Аренда помещений");
?>


<div class="wrap">
    <div class="main">
        <div class="content">
            <div class="section group">
                <div class="cont span_2_of_3">
                    <h2>Аренда площадей ТЦ Домино</h2>
                    <p> <? $APPLICATION->IncludeComponent('sitedevelopment:text','',array('CODE'=>'arenda-pomeshcheniy-tts-domino'))?></p>

                   <? $APPLICATION->IncludeComponent('sitedevelopment:rent')?>

                </div>
                <div class="rsidebar sidebar">
                    <? $APPLICATION->IncludeComponent('sitedevelopment:shops_type','list_menu')?>
                </div>
            </div>
        </div>
    </div>

   <? $APPLICATION->IncludeComponent('sitedevelopment:recall')?>

    <script>
        $(document).ready(function () {
            var now = new Date();
            start = now.getTime();

            $('#fade').popup({
                transition: 'all 0.3s',
                scrolllock: true
            });

            $('.submit').click(function()
            {
                var now = new Date();
                end = now.getTime();
                $thisGrid = $(this).parents(".grid");
                $("#time").val((end - start)/1000);
                area = $thisGrid.find(".area").text();
                price = $thisGrid.find(".price").text();
                floor = $thisGrid.find(".floor").text();
                $('#message').val('Желаем арендовать помещение '+area+', этаж '+ floor );
            })

        });

        function call() {
            var msg   = $('#formx').serialize();
            $.ajax({
                type: 'POST',
                url: '/ajax/recall.php',
                data: msg,
                success: function(data) {
                    alert('Ваша заявка отправлена.');
                    $('#fade').popup('hide');
                },
                error:  function(xhr, str){
                    alert('Возникла ошибка: ' + xhr.responseCode);
                }
            });
            return false;

        }
    </script>

</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
