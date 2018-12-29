{{--<head>--}}
    {{--<meta charset="utf-8">--}}
    {{--<meta http-equiv="X-UA-Compatible" content="IE=edge">--}}
    {{--<meta name="viewport" content="width=device-width, initial-scale=1">--}}

    {{--<title>Выбираем ключ</title><!--это возможно лишнее здесь-->--}}

    {{--<!-- Fonts -->--}}
    {{--<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">--}}

    {{--<!-- Styles -->--}}
    {{--<!-- <script src="../../js/jquery-ui.js"></script>--}}
     {{--<script src="../../js/jquery.js"></script>--}}
     {{--<script src="../../js/angular.min.js"></script>--}}
     {{--<script src="../../js/angular-datatables.min.js"></script>--}}
     {{--<script src="../../js/jquery.dataTables.min.js"></script>--}}
     {{--<script src="../../js/bootstrap.js"></script>--}}
     {{--<script src="../../js/site.js"></script>--}}
    {{---->--}}

    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
    {{--<script src="https://code.jquery.com/jquery-3.1.1.js"></script>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />--}}
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>--}}
    {{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />--}}
{{--</head>--}}
{{--<script src="../../js/headerPanel.js"></script>--}}
    <script >
    var header = document.createElement('div');
    header.setAttribute('id', 'header');
    header.style.border = '1px black solid';
    header.style.padding = '20px';
    header.style.margin = '20px 0';
    //header.style.backgroundColor = 'gray';
    header.style.color = 'white-blue';
    document.getElementById('wrapper').appendChild(header);

    var h1Header = document.createElement('h1');
    h1Header.style.position = 'absolute';
    h1Header.setAttribute('class', 'text-center');
    h1Header.style.margin = '110px 780px';
    h1Header.innerText = 'Сайт Эдика';
    header.appendChild(h1Header);

    //div внутри header
    var slider = document.createElement('div');
    slider.setAttribute('id', 'slider');
    slider.setAttribute('class', 'text-center');
    //own attribute for picture change handler
    slider.setAttribute('slide', 1);

    //styles for slider
    //slider.style.border = '1px black solid';
    slider.style.height = '250px';
    slider.style.margin = '20px 0';
    slider.style.backgroundImage = 'url(images/slide1.jpg)';

    document.getElementById('header').appendChild(slider);
    //h1 within slider

    var timer = setInterval(function(){
        function sliderFunc() {
            var currentSlide = slider.getAttribute('slide');
            //проверка
            alert (currentSlide);
            if (currentSlide === '5') {
                currentSlide = 1;
            }else {
                currentSlide++;
            }
            slider.setAttribute('slide', currentSlide);

            slider.style.backgroundImage = 'url(images/slide' + currentSlide + '.jpg)';
        }
    }, 3000);//здесб долдно быть написано timeout перед 3000, эьто указывает что shtorm распознает ее как фукцию, причем в отдельном файле так и есть. Такое впечатление, что не работает JS в принципе но этого не может быть
</script>