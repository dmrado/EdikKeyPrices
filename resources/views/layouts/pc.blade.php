<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Выбираем ключ</title><!--это возможно лишнее здесь-->

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

        <!-- Styles -->
        <!-- <script src="../../js/jquery-ui.js"></script>
         <script src="../../js/jquery.js"></script>
         <script src="../../js/angular.min.js"></script>
         <script src="../../js/angular-datatables.min.js"></script>
         <script src="../../js/jquery.dataTables.min.js"></script>
         <script src="../../js/bootstrap.js"></script>
         <script src="../../js/site.js"></script>
         <script src="../../js/app.js"></script>-->
        {{--<script src="https://code.jquery.com/jquery-3.1.1.js"></script>--}}
        {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
        {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>


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

    <section><!--выводим основное содержание-->
        @yield("main")
    </section>
</div>
    <footer>
        @include('vendors.modal')
        <p>&copy коллектив разработчиков сайта, 2018&nbsp;г</p>
        <p>А ежели вам чего-то не видно или не понятно, так Вы просто напишите <a href="mailto:edik@yandex.ru">Эдику</a>.</p>
    </footer>
</body>
</html>
