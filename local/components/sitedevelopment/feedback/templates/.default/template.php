<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="contact-form">
    <h2>Вы можете задать нам Ваш вопрос</h2>
    <form  id="form" action="javascript:void(null);" onsubmit="call_feed_back()">
        <div>
            <span><label>Имя</label></span>
            <span><input type="text" value="" name="name"></span>
        </div>
        <div>
            <span><label>E-mail</label></span>
            <span><input type="text" value="" name="email"></span>
        </div>
        <div>
            <span><label>Компания/Магазин</label></span>
            <span><input type="text" value="" name="company"></span>
        </div>
        <div>
            <span><label>Сообщение</label></span>
            <span><textarea name="message"> </textarea></span>
            <input id="time" type="hidden" name="time" value="">
        </div>
        <div>
            <span><input type="submit" value="Отправить" id="submit"></span>
        </div>
    </form>
</div>