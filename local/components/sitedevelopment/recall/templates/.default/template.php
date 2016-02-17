<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="popup popup--recall js-popup" data-popup="recall">
            <section class="popup__inner">
                <h2 class="popup__header">Перезвоните мне</h2>
                <form class="popup__form js-submit-form" method="GET" action="/ajax/recall.php">
                    <div class="input-field">
                        <label for="recall_name">Ваше имя</label>
                        <input type="text" name="name" id="recall_name" required>
                    </div>
                    <div class="input-field">
                        <label for="recall_phone">Контактный телефон</label>
                        <input type="tel" name="phone" id="recall_phone" required>
                    </div>
                    <input type="submit" value="Отправить" class="btn btn--type-two btn--type-two--size-s js-submit">
                </form>
                <div class="btn btn--close-popup js-btn-close-popup"></div>
            </section>
</div>