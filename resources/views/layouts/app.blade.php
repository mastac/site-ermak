<!doctype html>
<html lang="ru" xmlns="//www.w3.org/1999/xhtml" xmlns:og="//ogp.me/ns#" xmlns:fb="//www.facebook.com/2008/fbml">
<head prefix="og: http://ogp.me/ns#
				fb: http://ogp.me/ns/fb#
				article: http://ogp.me/ns/article#">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="apple-touch-icon" sizes="180x180" href="/images/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/fav/favicon-16x16.png">
    <link rel="manifest" href="/images/fav/site.webmanifest">
    <link rel="mask-icon" href="/images/fav/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="yandex-verification" content="6b703272f549817b" />
    <meta name="msvalidate.01" content="F941E8A1A2905EFF2600E416BC098559" />
    <meta name="google-site-verification" content="jqDJIUv3uiJq0ZR3loNpvjc5I9___dJp39fFF-lAKjk" />
    <meta name='wmail-verification' content='09d4b05cd19243ad1815545691944a59' />

    <meta property="og:type" content="website">
    <meta property="og:url" content="http://ooo-ermakomsk.ru/"/>
    <meta property="og:title" content="Пусконаладочные работы систем противопожарной защиты и видео наблюдения"/>
    <meta property="og:description" content="Обслуживаем коммерческие и бюджетные организации."/>
    <link rel="image_src" href="http://ooo-ermakomsk.ru/images/og_main.jpg">
    <meta property="og:image" content="http://ooo-ermakomsk.ru/images/og_main.jpg"/>
    <meta property="og:image:width" content="550">
    <meta property="og:image:height" content="205">
    <meta property="twitter:title" content="Пусконаладочные работы систем противопожарной защиты и видео наблюдения">
    <meta property="twitter:description" content="Обслуживаем коммерческие и бюджетные организации.">
    <meta property="twitter:url" content="http://ooo-ermakomsk.ru/">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:image:src" content="http://ooo-ermakomsk.ru/images/og_main.jpg">

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>@yield('title')</title>
    {{--Системы видеонаблюдения и пожарной безопасности в Омске--}}
    <meta name="keywords" content="@yield('keywords')">
    <meta name="description" content="@yield('description')" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123943002-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-123943002-1');
    </script>

</head>
<body>

<div id="page">

    <header id="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8 col-xs-8">
                    <a href="/index.html" rel="home">
                        <img src="images/logo2.png" alt="Ермак: Системы безопастности" style="height:100px">
                    </a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4" style="text-align: right; font-size: 1.5em; padding: 30px 0;">
                    <a href="mailto:ooo_emailomsk@mail.ru">ooo_emailomsk@mail.ru</a>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4" style="text-align: right; font-size: 1.5em; padding: 30px 0;">
                    +7 983 623 3677
                </div>
                <div class="col-md-3 col-sm-4 col-xs-4" style="text-align: right; font-size: 1.5em; padding: 30px 0;">
                    +7 900 675 1882
                </div>
            </div>
        </div>
    </header>

    <nav id="site-navigation" class="main-navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="primary-menu">
                        <ul id="primary-menu" class="menu">
                            <li class="menu-item"><a href="/index.html">
                                    <span data-hover="Главная">Главная</span>
                                </a></li>
                            <li class="menu-item"><a href="/partners.html">
                                    <span data-hover="Партнеры">Партнеры</span>
                                </a></li>
                            <li class="menu-item"><a href="/service.html">
                                    <span data-hover="Услуги и цены">Услуги и цены</span>
                                </a></li>
                            <li class="menu-item"><a href="/contacts.html">
                                    <span data-hover="Контакты">Контакты</span>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div id="content" class="site-content">

        @yield('content')

        <div id="question-block">

            <div class="container">
                <div class="row">
                    <div class="col-6">

                        @include('blocks.question-form')

                    </div>
                    <div class="col-6">
                        <h3>Контакты</h3>
                        <div style="padding-top: 20px;">
                            <i class="fa fa-map-marker"></i>
                            Адрес:<br/>
                            РФ, Омская область, 644046 г.Омск, ул. 3-я Линия д. 166, офис 15.
                        </div>
                        <div style="padding-top: 20px;">
                            <i class="fa fa-phone"></i>
                            Телефон:<br/>
                            +7 983 623 3677, +7 900 675 1882
                        </div>
                        <div style="padding-top: 20px;">
                            <i class="fa fa-envelope"></i>
                            Email:<br/>
                            ooo_ermakomsk@mail.ru
                        </div>
                        <div style="padding-top: 20px;">
                            ООО "ЕРМАК"<br/>
                            Р/сч N 40702810205040000183<br/>
                            ИНН/КПП 5506156467/550601001<br/>
                            ОГРН 1175543013931<br/>
                            БИК 045209777<br/>
                            Кор/Сч N 30101810000000000777<br/>
                            Филиал "Омский" АО "ОТП Банк"
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- copyright -->
    <div id="copyright">
        <div class="container clearfix">
            <div class="float-left">
                <!-- Yandex.Metrika counter -->
                <script type="text/javascript" >
                    (function (d, w, c) {
                        (w[c] = w[c] || []).push(function() {
                            try {
                                w.yaCounter49971517 = new Ya.Metrika2({
                                    id:49971517,
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
                        s.src = "https://mc.yandex.ru/metrika/tag.js";

                        if (w.opera == "[object Opera]") {
                            d.addEventListener("DOMContentLoaded", f, false);
                        } else { f(); }
                    })(document, window, "yandex_metrika_callbacks2");
                </script>
                <noscript><div><img src="https://mc.yandex.ru/watch/49971517" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
                <!-- /Yandex.Metrika counter -->
            </div>
            <div class="float-right">2018 © ЕРМАК</div>
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
