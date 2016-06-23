<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="footer">
    <div class="wrap">
        <div class="footer_grides">
            <div class="section group">
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Мы</h3>
                    <div class="post">
                        <p><span><a href="/shops_list/">Крупнейший мебельный центр в Крыму</a></span></p>
                        <p>Площадью 10 000 м2 </span></p>
                    </div>
                    <div class="post">
                        <p><span><a href="/shops_list/">У нас размещаются</a></span></p>
                        <p>50 мебельных магазинов <span><a href="/shops_list/">[...]</a></span></p>
                    </div>

                </div>
                <div class="col_1_of_4 span_1_of_4">
                    <h3>Соцсети</h3>
                    <div class="social_icons">
                        <ul>
                            <li><a href="#" class="facebook">
                                    <span class="icon">  </span> <span class="inner"><strong>Facebook</strong> <br>+ 12, 297</span>
                                </a></li>
                            <li><a href="#" class="twitter">
                                    <span class="icon">  </span> <span class="inner"><strong>Twitter</strong> <br>+ 5, 287</span>
                                </a></li>
                            <li><a href="#" class="rss">
                                    <span class="icon">  </span> <span class="inner"><strong>Rss</strong> <br>+ 77, 287</span>
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
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter37953555 = new Ya.Metrika({
                    id:37953555,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/37953555" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-79499035-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
