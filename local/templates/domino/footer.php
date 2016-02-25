<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="footer">
    <div class="wrap">
        <div class="footer_grides">
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Latest Tweets</h3>
                    <div class="post">
                        <p><span><a href="#">Tuesday,June 31th,2013</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Ut enim ad minim veniam sed do <span><a href="#">[...]</a></span></p>
                    </div>
                    <div class="post">
                        <p><span><a href="#">Monday,May 21th,2013</a></span></p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,Ut enim ad minim veniam sed do<span><a href="#">[...]</a></span></p>
                    </div>
                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Connect With Us</h3>
                    <div class="social_icons">
                        <ul>
                            <li><a href="#" class="facebook">
                                    <span class="icon"> &nbsp;</span> <span class="inner"><strong>Facebook</strong> <br>+ 12, 297</span>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <span class="icon"> &nbsp;</span> <span class="inner"><strong>Twitter</strong> <br>+ 5, 287</span>
                                </a></li>
                            <li><a href="#" class="rss">
                                    <span class="icon"> &nbsp;</span> <span class="inner"><strong>Rss</strong> <br>+ 77, 287</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <? $APPLICATION->IncludeComponent(
                    'bitrix:menu',
                    'footer',
                    array(
                        'ROOT_MENU_TYPE' => 'top',
                        'CHILD_MENU_TYPE' => 'sub',
                        'USE_EXT' => 'Y',
                        'MAX_LEVEL' => 1,
                        'MENU_CACHE_TYPE' => 'A',
                        'MENU_CACHE_TIME' => COMPONENTS_CACHE_TTL,
                    )
                ); ?>
                <? $APPLICATION->IncludeComponent('sitedevelopment:contacts','footer')?>
            </div>
        </div>
    </div>
    <div class="copy_right">
        <div class="wrap">
            <p> Мебельный Центр Домино | Сайт создан  <a href="http://w3layouts.com">Site Development Sevastopol</a></p>
        </div>
    </div>
</div>
</body>
</html>
