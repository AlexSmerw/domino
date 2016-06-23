<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="col contact">
    <div class="contact_info">
        <h2>Тц Домино на карте</h2>

        <div class="map">
            <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=ru&amp;geocode=&amp;aq=4&amp;oq=light&amp;sll=<?=$arResult['CONTACTS']->getPropValue('MAP')?>&amp;
                    sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;t=m&amp;z=15&amp;ll=<?=$arResult['CONTACTS']->getPropValue('MAP')?>&amp;output=embed"></iframe>
            <br>
            <small><a
                    href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=ru&amp;geocode=&amp;aq=4&amp;oq=light&amp;sll=<?=$arResult['CONTACTS']->getPropValue('MAP')?>&amp;
                    sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;t=m&amp;z=15&amp;ll=<?=$arResult['CONTACTS']->getPropValue('MAP')?>"
                    style="color:#666;text-align:left;font-size:12px">На большйо карте</a></small>
        </div>
    </div>

    <div class="company_address address">
        <h2>Контактные данные:</h2>
        <? $address = substr($arResult['CONTACTS']->getPropValue('ADDRESS'), 0, 42) ?>
        <p><?= $address ?>-</p>

        <p><?= str_replace($address, '', $arResult['CONTACTS']->getPropValue('ADDRESS')) ?></p>

        <p>Россия, Крым</p>
        <? $phones = $arResult['CONTACTS']->getPropValue('PHONES') ?>
        <? if (!empty($phones)) { ?>

            <? foreach ($phones as $phone) { ?>
                <p>Телефон:
                    <span> <?= $phone ?> </span>
                </p>
            <? } ?>

        <? } ?>
        <p>Email: <span><?= $arResult['CONTACTS']->getPropValue('EMAIL') ?></span></p>

    </div>
</div>