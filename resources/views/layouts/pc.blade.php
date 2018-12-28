<!DOCTYPE html>
<html lang="ru">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <link rel="stylesheet" href="#" type="text/html"/>
    <link rel="stylesheet" href="#" type="text/html">
    <link rel="stylesheet" href="#" type="text/css" media="print"/>
    <script src="../../js/jquery-ui.js"></script>
    <script src="../../js/jquery.js"></script>
    <script src="../../js/angular.min.js"></script>
    <script src="../../js/angular-datatables.min.js"></script>
    <script src="../../js/jquery.dataTables.min.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script src="../../js/site.js"></script>
    <script src="../../js/app.js"></script>
    <script src="#"></script>
    @stack("head")<!--сюда поместим тег, привязывающий файл сценария pc.js-->

    <title>@yield("title"):: Выбор</title><!--выводим основную часть названия каждой страницы. Дизайн для настольных компьютеров-->

    @stack("head")

    <style>
        #pad{
            padding-top: 25px;
            padding-bottom: 25px;
            padding-right: 50px;
            padding-left: 50px;
        }
    </style>
</head>
<body>

    <header>
        <div id="header_1"><h1>Выбор ключа</h1></div>
        <div id="header_2"><h2>Вы</h2></div>
        <div id="header_3"><h2>Они</h2></div>
        <div id="header_4"><h2>Контакты</h2></div>
    </header>

    <nav><!--Это навигационная панель-->
            @include("layouts.navbar")
    </nav>

    <section>
        @yield("main")<!--выводим основное содержание-->
    </section>

    <footer>
        <p>&copy коллектив разработчиков сайта, 2018&nbsp;г</p>
    </footer>
</body>
</html>