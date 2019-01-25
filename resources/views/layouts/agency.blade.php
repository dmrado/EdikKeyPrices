<!DOCTYPE html>
<html lang="en">

<link>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Key chippy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script src="js/dynamic-table.js"></script>

    <!-- popper -->


    <!-- Bootstrap select -->
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    {{--<script src="../../js/headerPanel.js"></script>--}}

    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>--}}

{{--работает с bootstrap tooltip--}}
{{--<script>--}}
    {{--$('#example').tooltip(options)--}}
{{--</script>--}}

{{--работает с bootstrap popover --}}
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

{{--подключает эффект карусели куда пока не подключено--}}
<script>
    $('.carousel').carousel()
</script>


<script>

</script>
{{--меняет картинку в header Надо картинки добавить--}}
{{--я не могу найти в скриптах функцию, ответственную за размещение картинки header-bg на элементе id = "masthead"--}}
<script>
    var masthead = document.getElementById('masthead');
    masthead.setAttribute('header-bg', 1);
    //masthead.style.backgroundImage = 'url(images/header-bg.jpg)';
    function sliderFunc() {
        var currentSlide = masthead.attr();
        //проверка
        alert (currentSlide);
        if (currentSlide === 2) {
            currentSlide = 0;
        }else {
            currentSlide++;
        }
        currentSlide.backgroundImage = 'url(public/img/header-bg' + currentSlide + '.jpg)';
        masthead.attr('slide', currentSlide);
    }
</script>

<script>
    var timer = setInterval(function(){
        sliderFunc();
    }, 3000);
</script>


<body id="page-top">

<section><!--выводим основное содержание-->
    @yield("main")
</section>

</body>

</html>