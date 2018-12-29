<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Выбираем ключ</title><!--это возможно лишнее здесь-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <!-- <script src="../../js/jquery-ui.js"></script>
         <script src="../../js/jquery.js"></script>
         <script src="../../js/angular.min.js"></script>
         <script src="../../js/angular-datatables.min.js"></script>
         <script src="../../js/jquery.dataTables.min.js"></script>
         <script src="../../js/bootstrap.js"></script>
         <script src="../../js/site.js"></script>
         <script src="../../js/app.js"></script>-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

    <script src="#"></script>
    @stack("head")<!--сюда поместим тег, привязывающий файл сценария pc.js-->

    <title>@yield("title"):: Выбор</title><!--выводим основную часть названия каждой страницы. Дизайн для настольных компьютеров-->

    <style>
        #pad{
            padding-top: 25px;
            padding-bottom: 25px;
            padding-right: 50px;
            padding-left: 50px;
        }
    </style>
</head>
<body id="pad">
<div id="wrapper">
    <header><!--header-->
        @include("vendors.header")
    </header>

    <nav><!--navbar-->
        @include("vendors.navbar")
    </nav>

    <section>
        @yield("main")<!--выводим основное содержание-->
    </section>
</div>
    <footer>

        <p>&copy коллектив разработчиков сайта, 2018&nbsp;г</p>

        <p>А ежели вам чего-то не видно или не понятно, так Вы просто напишите <a href="mailto:edik@yandex.ru">Эдику</a>.</p>
    </footer>
</body>
</html>
