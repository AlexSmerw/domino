<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('Мебельный Центр Домино');
?>
    <body>
<div class="header">
    <div class="header_top">
        <div class="wrap">
            <div class="social-icons">
                <ul>
                    <li><a class="facebook" href="#" target="_blank"> </a></li>
                    <li><a class="twitter" href="#" target="_blank"></a></li>
                    <li><a class="googleplus" href="#" target="_blank"></a></li>
                    <li><a class="pinterest" href="#" target="_blank"></a></li>
                    <li><a class="dribbble" href="#" target="_blank"></a></li>
                    <li><a class="vimeo" href="#" target="_blank"></a></li>
                    <div class="clear"></div>
                </ul>
            </div>


            <div class="menu">
                <ul>
                    <li class="active"><a href="index.php">Главная</a></li>
                    <li><a href="about.php">О нас</a></li>
                    <li><a href="shops_list.php">Магазины</a></li>
                    <li><a href="rent.php">Аренда помещений</a></li>
                    <li><a href="news.php">Новости</a></li>
                    <li><a href="contact.php">Контакты</a></li>
                    <div class="clear"></div>
                </ul>
            </div>



            <div class="clear"></div>
        </div>
    </div>
    <div class="logo">
        <div class="domino-logo">
            <a href="index.php"><h1><span class="domino-span" >D</span>omino <span>M</span>all</h1></a>
            <div  class="work-time">
                <b>г.Севастополь</b> <br>
                <b>Время работы :</b> c <span>10:00</span> до <span>17:00</span>
                <br>
                8 марта - Выходной день
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="wrap">
           <? $APPLICATION->IncludeComponent('sitedevelopment:slider') ?>
        </div>
    </div>
</div>
<div class="wrap">
    <div class="main">
        <div class="content">
            <? $APPLICATION->IncludeComponent('sitedevelopment:advantages')?>
            <div class="content-bottom">
                <div class="section group">
                    <div class="col_1_of_3 span_1_of_3">
                        <h3>Категории магазинов</h3>
                        <ul>
                            <li>Корпусная мебель</li>
                            <li>Мягкая мебель</li>
                            <li>Sunt in culpa qui officia vel illum qui</li>
                            <li>vel illum qui dolorem eum wise man therefore</li>
                            <li>The wise man therefore in culpa qui officia</li>
                            <li>Sunt in culpa qui officia culpa qui officia</li>
                            <li>Lorem ipsum dolor sit amet qui officia</li>
                            <li>Duis aute irure dolor in culpa qui</li>
                            <li>Sunt in culpa qui officia vel illum qui</li>
                            <li>vel illum qui dolorem eum wise man therefore</li>
                            <li>The wise man therefore in culpa qui officia</li>
                            <li>Sunt in culpa qui officia culpa qui officia</li>
                        </ul>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <h3>ТЦ Домино</h3>
                        <img src="web/images/IMG_7425-300x203.jpg" alt=""/>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                    <div class="col_1_of_3 span_1_of_3">
                        <div class="new-products">
                            <h3>Наши магазины</h3>
                            <p><a class="fancybox" href="web/images/product1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="web/images/product1.jpg" alt=""/><span> </span></a></p>
                            <p><a class="fancybox" href="web/images/product2.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="web/images/product2.jpg" alt=""/><span> </span></a></p>
                            <p><a class="fancybox" href="web/images/product3.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="web/images/product3.jpg" alt=""/><span> </span></a></p>
                            <p><a class="fancybox" href="web/images/product4.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="web/images/product4.jpg" alt=""/><span> </span></a></p>
                            <p><a class="fancybox" href="web/images/gallery-img4.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="web/images/gallery-img4.jpg" alt=""/><span> </span></a></p>
                            <p><a class="fancybox" href="web/images/gallery-img8.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="web/images/gallery-img8.jpg" alt=""/><span> </span></a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section group">
                <div class="grid_1_of_4 images_1_of_4">
                    <a class="fancybox" href="web/images/gallery-img1.jpg" data-fancybox-group="gallery" title="Lorem ipsum dolor sit amet"><img src="web/images/gallery-img1.jpg" alt=""/><span> </span></a>
                    <h3>Новость 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<span><a href="details.html">[...]</a></span></p>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a class="fancybox" href="web/images/gallery-img2.jpg" data-fancybox-group="gallery" title="Etiam quis mi eu elit temp"><img src="web/images/gallery-img2.jpg" alt=""/><span> </span></a>
                    <h3>Новость 2</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<span><a href="details.html">[...]</a></span></p>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a class="fancybox" href="web/images/gallery-img3.jpg" data-fancybox-group="gallery" title="Cras neque mi, semper leon"><img src="web/images/gallery-img3.jpg" alt=""/><span> </span></a>
                    <h3>Новость 3</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<span><a href="details.html">[...]</a></span></p>
                </div>
                <div class="grid_1_of_4 images_1_of_4">
                    <a class="fancybox" href="web/images/gallery-img4.jpg" data-fancybox-group="gallery" title="Sed vel sapien vel sem uno"><img src="web/images/gallery-img4.jpg" alt=""/><span> </span></a>
                    <h3>Новость 4</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua<span><a href="details.html">[...]</a></span></p>
                </div>
            </div>
        </div>

    </div>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>