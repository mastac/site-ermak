<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
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

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    <title>Системы видеонаблюдения и пожарной безопасности в Омске</title>

</head>
<body>

<div id="page">

    <header id="site-header">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-8 col-xs-8">
                    <a href="/" rel="home">
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
                            <li class="menu-item"><a href="/">
                                    <span data-hover="Главная">Главная</span>
                                </a></li>
                            <li class="menu-item"><a href="/partners">
                                    <span data-hover="Партнеры">Партнеры</span>
                                </a></li>
                            <li class="menu-item"><a href="/service">
                                    <span data-hover="Услуги и цены">Услуги и цены</span>
                                </a></li>
                            <li class="menu-item"><a href="/contacts">
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
            <div class="float-right">2018 © ЕРМАК</div>
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<script src="{{ mix('/js/app.js') }}"></script>

</body>
</html>
