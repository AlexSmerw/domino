<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<!-- Fade -->
<div id="fade" class="well">
    <div style="width: 80%; margin: 30px auto;">
        <div class="contact-form">
            <p>Телефон для справок:  <? $APPLICATION->IncludeComponent('sitedevelopment:text','',array('CODE'=>'telefon-dlya-spravok-dlya-arendy-ploshchadey'))?></p><br>
            <h2>Форма заявки на аренду</h2><br>
            <form  id="formx" action="javascript:void(null);" onsubmit="call()">
                <div>
                    <span><label>Имя</label></span>
                    <span><input type="text" name="name" value=""></span>
                </div>
                <div>
                    <span><label>E-mail</label></span>
                    <span><input type="email" name="email" value="" required title="Поле заполнено не верно"></span>
                </div>
                <div>
                    <span><label>Телефон</label></span>
                    <span><input type="text" name="phone" value=""></span>
                </div>
                <div>
                    <span><label>Магазин/Компания</label></span>
                    <span><input type="text" name="company" value=""> <input id="time" type="hidden" name="time" value=""></span>
                </div>
                <div>
                    <span><label>Сообщение</label></span>
                    <span><textarea name="message" id="message"> </textarea></span>
                </div>
                <div>
                    <span><input type="submit" value="Отправить" id="subForm"></span>
                </div>
            </form>
        </div>
    </div>
</div>