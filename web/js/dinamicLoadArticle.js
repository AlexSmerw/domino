
    $(document).ready(function () {

        /* Переменная-флаг для отслеживания того, происходит ли в данный момент ajax-запрос. В самом начале даем ей значение false, т.е. запрос не в процессе выполнения */
        var inProgress = false;
        /* С какой статьи надо делать выборку из базы при ajax-запросе */
        var startFrom = 10;
        var stop = false;

        /* Используйте вариант $('#more').click(function() для того, чтобы дать пользователю возможность управлять процессом, кликая по кнопке "Дальше" под блоком статей (см. файл index.php) */
        $(window).scroll(function () {

            /* Если высота окна + высота прокрутки больше или равны высоте всего документа и ajax-запрос в настоящий момент не выполняется, то запускаем ajax-запрос */
            if ($(window).scrollTop() + $(window).height() >= $(document).height() - 400 && !inProgress && stop != true) {

                $.ajax({
                    /* адрес файла-обработчика запроса */
                    url: ajaxSendPage,
                    /* метод отправки данных */
                    method: 'POST',
                    /* данные, которые мы передаем в файл-обработчик */
                    data: {"startFrom": startFrom},
                    /* что нужно сделать до отправки запрса */
                    beforeSend: function () {
                        /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
                        inProgress = true;
                        var $preloader = $('#page-preloader'),
                            $spinner   = $preloader.find('.spinner');
                        $spinner.css('display','block');
                        $spinner.fadeOut();
                        $preloader.delay(1000).fadeOut('slow');
                    }
                    /* что нужно сделать по факту выполнения запроса */
                }).done(function (data) {

                    /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */
                    //data = jQuery.parseJSON(data);

                    /* Если массив не пуст (т.е. статьи там есть) */
                    if (data.length > 0) {
                        /* Делаем проход по каждому результату, оказвашемуся в массиве,
                         где в index попадает индекс текущего элемента массива, а в data - сама статья */
                        $(".content").append(data);
                        /* По факту окончания запроса снова меняем значение флага на false */
                        inProgress = false;
                    }
                });
            }
        });


        $('#more-shop').click(function () {
                $.ajax({
                    /* адрес файла-обработчика запроса */
                    url: ajaxSendPage,
                    /* метод отправки данных */
                    method: 'POST',
                    /* данные, которые мы передаем в файл-обработчик */
                    data: {"startFrom": startFrom},
                    /* что нужно сделать до отправки запрса */
                    beforeSend: function () {
                        /* меняем значение флага на true, т.е. запрос сейчас в процессе выполнения */
                        inProgress = true;
                        var $preloader = $('#page-preloader'),
                            $spinner   = $preloader.find('.spinner');
                        $spinner.css('display','block');
                        $spinner.fadeOut();
                        $preloader.delay(1000).fadeOut('slow');
                    }
                    /* что нужно сделать по факту выполнения запроса */
                }).done(function (data) {

                    /* Преобразуем результат, пришедший от обработчика - преобразуем json-строку обратно в массив */
                    //data = jQuery.parseJSON(data);

                    /* Если массив не пуст (т.е. статьи там есть) */
                    if (data.length > 0) {
                        /* Делаем проход по каждому результату, оказвашемуся в массиве,
                         где в index попадает индекс текущего элемента массива, а в data - сама статья */
                        $(".content").append(data);
                        /* По факту окончания запроса снова меняем значение флага на false */
                        inProgress = false;
                    }
                });
        });

    });
