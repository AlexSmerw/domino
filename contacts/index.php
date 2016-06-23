<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты ТЦ Домино");
?>
<div class="wrap">
    <div class="main">
        <div class="content">
            <div class="section group">


                    <? $APPLICATION->IncludeComponent('sitedevelopment:contacts')?>

<div class="col span_2_of_3">
<? $APPLICATION->IncludeComponent('sitedevelopment:text','',array('CODE'=>'kak_dobratsya'))?>
</div>

                <div class="col span_2_of_3">
                    <? $APPLICATION->IncludeComponent('sitedevelopment:feedback')?>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function () {
        var now = new Date();
        start = now.getTime();


        $('#submit').hover(function()
        {
            var now = new Date();
            end = now.getTime();
            $("#time").val((end - start)/1000);
        })

    });

    function call_feed_back() {
        var msg = $('#form').serialize();
        $.ajax({
            type: 'POST',
            url: '/ajax/feedback.php',
            data: msg,
            success: function (data) {
                alert('Ваша заявка отправленна.');
                document.getElementById("form").reset();
            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
        return false;
    }
</script>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
