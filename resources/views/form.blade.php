@extends(request()->route()->getController()->parentView)
<!-- Header -->
{{--<div id="wrapper">--}}
    {{--<div id="inner">--}}
        {{--<div class="slide one">one</div>--}}
        {{--<div class="slide two">two</div>--}}
        {{--<div class="slide three">three</div>--}}
        {{--<div class="slide four">four</div>--}}
    {{--</div>--}}
{{--</div>--}}
<header class="masthead" id="masthead"> <!--data-ride="carousel"-->
    {{--<div class="carousel-inner">--}}
    {{--<div class="carousel-item active">--}}
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"></div>
            <div class="intro-heading text-uppercase">Chippy</div>
            <a class="navbar-brand js-scroll-trigger" href="/EdikKeyPrices/public">Chippi.ru</a>

            {{--<a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Наша деятельность</a>--}}
        </div>
    </div>
    {{--</div>--}}
    {{--</div>--}}
</header>
<?php
/** @var $carBrands [Cardrand] */
/** @var $serv [Sevise] */
/** @var $caryear [Caryear] */
?>
@section('main')
<section>
    <div class="container"><!--нужен ли здесь параметр и какой-->
        <form action="" method="get" id="carSelect">
            <h2 align="center">Пожалуйста выберите свой автомобиль и нужный Вам ключ:</h2><br/>
                <div class="form-group">
                    <div class="row">
                        <label for="марка" class="sr-only"></label><br/>
                            <select id="first_level" name="first_level" class="form-control">
                                @foreach($carBrands as $carBrand)
                                    <option value="{{$carBrand->carbrand_id}}">{{$carBrand->carbrand_name}}</option>
                                @endforeach
                            </select>
                    </div>
                </div><!--end 1 div class="form-group"-->
                <div class="form-group">
                    <div class="row">
                        <label for="модель" class="sr-only"></label><br/>
                            <select id="second_level" name="second_level" class="form-control">

                            </select>
                    </div>
                </div><!--end 2 div class="form-group"-->
                <div class="form-group">
                    <div class="row">
                        <label for="год выпуска" class="sr-only"></label><br/>
                            <select id="third_level" name="third_level" class="form-control">

                            </select>
                    </div>
                </div><!--end 3 div class="form-group"-->
                {{--<div class="form-group">--}}
                    {{--<div class="row">--}}
                        {{--<label for="год выпуска" class="sr-only"></label><br/>--}}
                            {{--<select id="fourth_level" name="fourth_level[]" class="form-control">--}}

                            {{--</select>--}}
                    {{--</div>--}}
                {{--</div><!--end 4 div class="form-group"-->--}}
            {{--<div class="form-group">--}}
                {{--<div class="col-sm-offset-2 col-sm-4">--}}
                {{--<button type="submit" class="btn btn-success" id="search">Найти</button>--}}
                {{--</div>--}}
            {{--</div>--}}
            <div class="row">
            <input type="submit" id="getKeyImgs" title="Вывод изображения ключей">
            </div>
            {{--три foreign key: carbrand_id  carmod_id  caryear_id отправляются в таблицу keys за urlами картинок ключей--}}
        </form>
        <div id="imgDiv"></div>

    </div>
<br/>

    <!-- Portfolio Grid СДЕЛАТЬ СЕЛЕКТОМ ВЫПАДЕНИЕ ИЗ БАЗЫ КОНТЕНТ ПРО КАЖДЫЙ КЛЮЧ-->
    <button id="ex" type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Это окно будет появляться при наведении на фотографию ключа" data-placement="top" data-content="Сюда динамически будут добавляться из 'keySubscr' Характеристики
Марка: Mitsubishi
Модель: Mitsubishi заготовка ключа с чипом (чип 46).
Оригинал: Да
Лезвие: Невыкидное.
Стоимость заготовки 750 р.
Точную стоимость узнавайте у менеджера">Нажми что бы получить поповер</button>

<br/>
    <div class="container">
        <form action="#" method="get" id="serviceSelect" enctype="application/x-www-form-urlencoded">
            <h2 align="center">Пожалуйста выберите услуги:</h2><br/>
                <div class="form-group">
                    <div class="row">
                        <label for="Пакет услуг" class="sr-only"></label><br/>
                            <div id="design">
                                <table class="tab table">
                                    <tr>
                                        <th>Наименование работ и материалов</th>
                                        <th>Стоимость</th>
                                    </tr>
                                    <tr>
                                        <td title="Появится при выборе ключа выше">Стоимость заготовки</td>
                                        <td align="center"><span id="costDraft" title="Появится при выборе ключа выше">0</span></td>
                                    </tr>
                                    <tr>
                                        <td><p><input type="checkbox" name="costPrograming" id="costPrograming" value="2000" checked="checked" >Программирование</p></td>
                                        <td align="center"><span id="costProg"></span></td>
                                    </tr>
                                    <tr>
                                        <td>Нарезка лезвия <br>
                                            <label><input id="sharpEng" type="radio" name="bladeType" value="500" checked="checked" />Английская</label><br>
                                            <label><input id="sharpVert" type="radio" name="bladeType" value="800"/>Вертикальная</label><br>
                                        </td>
                                        <td align="center"><span  id="sharpVars">0</span></td>
                                    </tr>
                                    <tr id="costKey">
                                        <td><b>Общая стоимость</b></td>
                                        <td align="center"><b><span id="costTotal">0</span></b></td>
                                    </tr>
                                </table>
                            <!--здеcь можно будет загружать наименование работ из БД и стоимость если их станет много-->
                            {{--@foreach($serv as $services)--}}
                                {{--<option value="{{$services->cost}}">{{$services->service}}</option>--}}
                            {{--@endforeach--}}
                            </div>
                    </div>
                </div><!--end 1 div class="form-group"-->

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        {{--<button type="submit" class="btn btn-success" id="search">Подсчитать</button>--}}
                    </div>
                </div>
        </form>
    </div>


    <div class="container"><!--нужен ли здесь параметр и какой-->
        <form action="" method="get" id="customerSelect">
            <h2 align="center">Пожалуйста отправьте ваше пожелание мастеру</h2><br/>
            <div class="form-group">
                <div class="row">
                    <label for="customerName" class="sr-only"></label><br/>
                    <input type="text" id="customerName" name="" class="form-control" placeholder="Ваше имя"/>
                </div>
            </div><!--end 1 div class="form-group"-->

            <div class="form-group">
                <div class="row">
                    <label for="customerMail" class="sr-only"></label><br/>
                    <input type="text" id="customerMail" name="" class="form-control" placeholder="Ваш телефон" data-toggle="popover" data-placement="top" data-content=""/>
                </div>
            </div><!--end 2 div class="form-group"-->

            <div class="form-group">
                <div class="row">
                    <label for="модель" class="sr-only"></label><br/>
                    <input type="text" id="customerPhone" name="" class="form-control" placeholder="*Ваш email" data-toggle="popover"
                           {{--title="Отправка информации мастеру" --}}
                           data-placement="top" data-content="Мастер получит mail с уникальным кодом и вашим выбором и свяжется с Вами для обсуждения деталей"/>
                </div>
            </div><!--end 3 div class="form-group"-->
            {{--ВНИМАНИЕ !!! СГЕНЕРИРОВАТЬ И ПЕРЕДАТЬ УНИКАЛЬНЫЙ НОМЕР--}}
            <div class="form-group">
                <div class="row">
                    <label for="hidden" class="sr-only"></label><br/>
                    <input type="hidden" id="customerOrderNum" name="" class="form-control"/>
                </div>
            </div><!--end 4 div class="form-group"-->
            <div class="row">
            <input type="submit" id="getCustomerOrder" value="Отправить">
            </div>
        </form>
        <h5 align="center">или позвоните и обсудите с ним по телефону все, интересующее Вас</h5><br/>
        <h3 align="center">+7 (906) 790-73-84</h3>
<br/>

{{--Блок регистрации на сайте ИМЯ ВЗЯТЬ ИЗ КУКИ ЕСЛИ ОНО ТАМ ЕСТЬ И ВСТАВИТЬ СЮДА--}}
        <form action="" method="post" id="loginForm" enctype="application/x-www-form-urlencoded">
        <h2 align="center">Если хотите, зарегистрируйтесь, и мы сохраним историю наших взаимООтношений</h2><br/>
            <div class="form-group">
                <div class="row">
                    <label for="customerName1" class="sr-only"></label><br/>
                    <input type="text" id="customerName1" name="customerName1" class="form-control" placeholder="Ваше имя"/>
                </div>
            </div><!--end 1 div class="form-group"-->


            <div class="form-group">
            <div class="row">
                <label for="login" class="sr-only"></label><br/>
                <input type="text" id="login" name="login" class="form-control" placeholder="Придумайте логин, английскими буквами*"/>
            </div>
        </div><!--end 1 div class="form-group"-->

        <div class="form-group">
            <div class="row">
                <label for="password" class="sr-only"></label><br/>
                <input type="password" id="password" name="password" class="form-control" placeholder="Придумайте пароль, английскими буквами и цифрами*" data-toggle="popover" data-placement="top" data-content=""/>
            </div>
        </div><!--end 2 div class="form-group"-->
            <div class="row">
                <input type="submit" id="submit" value="Зарегистрироваться">
            </div>
        </form>

    </div>
</section>

{{--карусель самодельная--}}
<script>
    var slideCount = $(".slide").length;

    var wrapperWidth = $("#wrapper").width();
    $(".slide").width(wrapperWidth);
    $('#inner').css('width', wrapperWidth * slideCount + "px");
    //wrapperWidth - в данном случае 400px css
    $("#inner").css("left", - wrapperWidth + "px");
    $("#inner .slide:last-child").prependTo("#inner");

    function nextSlide() {
        $("#inner .slide:first-child").appendTo("#inner");
        $("#inner").css("left", "0");
        $('#inner').animate({
            'left': - wrapperWidth + 'px'
        }, 2000);
    }
    //setInterval(nextSlide, 3000);

    function prevSlide() {
        $('#inner').animate({
            'left': 0 + 'px'
        }, 2000, "swing", function(){
            $("#inner").css("left", - wrapperWidth + "px");//резервируем место
            $("#inner .slide:last-child").prependTo("#inner");//вставляем туда узел
        });

    }
    setInterval(prevSlide, 3000);
</script>

{{--фон формы--}}
<script>
        document.body.style.backgroundImage = 'url(img/form_background_img2.png)';
</script>

{{--не работает, не нужно--}}
<script>
    $(document).ready(function () {
        $('#serviceSelect').selectpicker();
    });
</script>

{{--не работает, не нужно--}}
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

{{--не работает, не нужно--}}
<script>$('#example').tooltip(options)</script>

{{--multiselect--}}
<script>
    $(document).ready(function () {
        $('#first_level').change(function() {
            var selected = $(this).find('option:selected').val();
            //alert(selected);
            $('#second_level').html('');//очистка списка перед тем как выбрать
            $('#third_level').html('');
            $.ajax({
                url:"/EdikKeyPrices/public/getCarMod/"+ selected,
                method:"GET",
                dataType: "json",
                // encode: "true",
                success:function(data){
                    console.log(data);
                    for (var i = 0; i < data.length; i ++){
                        $('#second_level')
                            .append('<option value="'+ data[i].carmod_id +'">' + data[i].carmod_name + '</option>')
                    }
                    $('#second_level').val(data[0].carmod_id).change();
                }//end success
            });//end ajax
        });//end first_level

        $('#second_level').change(function() {
            var selected = $(this).find('option:selected').val();
            $('#third_level').html('');//очистка списка перед тем как выбрать
           // alert(selected);
            $.ajax({
                url:"/EdikKeyPrices/public/getCarYear/"+ selected,
                method:"GET",
                dataType: "json",
                // encode: "true",
               // data:{selected:selected},
                success:function(data){
                    console.log(data);
                    for (var i = 0; i < data.length; i ++){
                        $('#third_level')
                            .append('<option value="'+ data[i].caryear_id +'">' + data[i].caryear + '</option>')
                    }
                }//end success
            });//end ajax
        });//end first_level change
    })//end ready
</script>

{{--вынимаем из базы картинки ключей по url и выводим в div #imgDiv--}}
<script>
    $(function () {
        $('#getKeyImgs').click(function (e) {
            e.preventDefault();
            var carYearId = $('#third_level').val();
           // alert(carYearId);
            if (!carYearId){
                return false;
            }
            $.ajax({
                url:"/EdikKeyPrices/public/getKey/"+ carYearId,
                method:"GET",
                dataType: "json",
                // encode: "true",
                // data:{selected:selected},
                success:function(data){
                    console.log(data);
                    $('#imgDiv').html('');//очистка списка перед тем как выбрать
                    for (var i = 0; i < data.length; i ++){
                        $('#imgDiv')
                             .append('<img src="'+ data[i].keyPict +'" />');
                    }
                }//end success
            });//end ajax

        });//end click
    });//end ready
</script>

{{--считаем стоимость работ--}}
{{--хочу что бы выбор услуг появлялся только после прихода изображений ключей--}}
{{--но можно и по клику на кнопку с id="getKeyImgs"--}}
<script>
    $(function () {
       $('#sharpVars').html($('#sharpEng').val());
    });
</script>

<script>
    $(function(){
        $('#sharpEng').change(function(){
            var cost = $(this).val();
            $('#sharpVars').html(cost);
            sFunc();
        });
    });

    $('#sharpVert').change(function(){
        var cost = $(this).val();
        $('#sharpVars').html(cost);
        sFunc();
    });
</script>

<script>
    $(function () {
        var a = $('#imgDiv').val();
        // if (!a){
        //     return false;
        // }
        sFunc()
    });//end ready
</script>

{{--работает исправно--}}
<script>
    $(function(){
        $('#costPrograming').change();
    });//end ready
    $('#costPrograming').change(function() {
        var costPrograming = $('input[name="costPrograming"]:checked');
      //  alert(costPrograming.val());
        var s = $('#costProg').html(0);
        if(costPrograming){
             s.html(costPrograming.val());
        }
        sFunc();
    });//end change
</script>


<script>
function sFunc() {

    var draft =  $('#costDraft').html();//стоимость заготовки должна быть динамически
    var program = $('#costProg').html();//ст-ть программирования фиксированная
    var sharp = $('#sharpVars').html();
    var sum = (Number(draft) + Number(program) + Number(sharp));

    $('#costTotal').html(sum);
}
</script>

{{--получаем стоимость нарезки "английская" или "вертикальная" строка в таблице с id="sharpVars"--}}
<script>
    {{--$(function () {--}}
        {{--$('#sharpVars').change(function() {--}}
            {{--var keySharp = $(this).find().val();--}}
            {{--alert(keySharp);--}}
            {{--$.ajax({--}}
                {{--url: "/EdikKeyPrices/public/getSharp/" + keySharp,--}}
                {{--method: "GET",--}}
                {{--dataType: "json",--}}
                {{--// encode: "true",--}}
                {{--success: function (data) {--}}
                    {{--alert('data');--}}
                    {{--$('.tab table').find(child.span[2]).append(data);--}}
                {{--}--}}
            {{--});//end ajax--}}
        {{--});//end change--}}
    {{--});//end ready--}}
</script>

{{--здесь регистрируем пользователя ВЫНЕСТИ ЭТУ ФУНКЦИЮ В ОТДЕЛЬНЫЙ ФАЙЛ И ОСТАЛЬНЫЕ ТОЖЕ--}}
<script>
    var oAJAX = new XMLHttpRequest();
    var loginForm = document.getElementById('loginForm');
    loginForm.addEventListener('submit', function (evt) {
        var oForm = evt.target;
        var s = "";
        var cEls = oForm.elements;//получает 7 элементов: имя, логин, пароль, "Зарегистрироваться", метод, экшен, кодировщик
        for(var i in cEls){
            if(s !=="") s+="&";
            s += cEls[i].name + "=" + encodeURIComponent(cEls[i].value);
          //alert(s);
        }
        oAJAX.open(oForm.method, oForm.action, true);
        oAJAX.setRequestHeader("Content-type", oForm.enctype);
        oAJAX.send(s);
        alert(s);
        evt.preventDefault();
        //обработать результат записи пользователя в таблицу users
    });
</script>

{{--сбор со страницы данных заказа для mail Эдику--}}
<script>
    //забираем данные машины в объект order
    var customerSelect = document.getElementById('carSelect');
        customerSelect.onsubmit = function () {
        var first_level = document.getElementById("first_level").value;
        var second_level = document.getElementById("second_level").value;
        var third_level = document.getElementById("third_level").value;
        var order = {
            first_level: first_level,
            second_level: second_level,
            third_level: third_level
        }//order отправить в OrderShipped.php в view
            console.log(order);
        }
</script>

<script>
    //забираем данные клиента в объект client
    var carSelect = document.getElementById("customerSelect");
        carSelect.onsubmit = function () {
            var customerName = document.getElementById("customerName").value;
            var customerPhone = document.getElementById("customerPhone").value;
            var customerMail = document.getElementById("customerMail").value;
            var customerOrderNum = document.getElementById("customerOrderNum").value;

        var client = {
            customerName: customerName,
            customerPhone: customerPhone,
            customerMail: customerMail,
            customerOrderNum: customerOrderNum,
        };//client отправить в OrderShipped.php в view
            alert(client);
        }
</script>

<script>
    //забираем стоимость в объект cost
    var serviceSelect = document.getElementById("serviceSelect");
    serviceSelect.onchange = function () {
        var costTotal = document.getElementById("costTotal").value;
        var cost = {
            costTotal: costTotal
        }
    }
</script>

<div id="page-wrapper"></div>
<script>
    // var carSelect = document.getElementById('carSelect');
    // carSelect.addEventListener('submit', function(evt){
    //     var oAJAX = new XMLHttpRequest();
    //     var oForm = evt.target;
    //     var s = "";
    //     var cEls = oForm.elements;
    //     for(var i in cEls){
    //         if(s !== "") s+="&";
    //         s += cEls[i].selected;//я уже запутался к этому моменту
    //     }
    //     oAJAX.open(carSelect.action, carSelect.method, true);
    //     // oAJAX.setRequestHeader('Content-type', carSelect.enctype);
    //     oAJAX.addEventListener('readystatechange', function (evt) {
    //         if((evt.target.readyState===4)&&(evt.target.status===200)){
    //             var r = evt.target.responseText;
    //             //должен вернуться массив urlов из таблицы keys, его надо обработать, в таблице keys еще нет поля для них надо добавить его миграцией или прям так вручную
    //             function imgDiv(url) {
    //                 var el = document.getElementById('imgDiv');
    //                 var img = new Image();
    //                 img.onload = function (){
    //                     el.style.width = img.width+'px';
    //                     el.style.height = (img.height + 20)+'px';
    //                     el.innerHTML = '<img src='+url+' style="margin:0" width="'+img.width+'" height="'+img.height+'"  <br/> ('+img.width+'x'+img.height+')';
    //                 }
    //                 el.innerHTML = 'Загружаются варианты ключей для Вас...';
    //                 img.src=url;
    //             }
    //         }
    //     });//end listener for oAJAX
    //     oAJAX.send(s);
    //     evt.preventDefault();
    //     return false;//обрываем цепочку срабаотывания вызовов если объектов несколько
    // });
</script>
<script>
    var wrap = document.getElementsByTagName('wrapper');
    wrap.style.backgroundimage ="EdikKeyPrices/public/img/form_background_img1.png";
</script>

{{--вычисление и просмотр размера document--}}
<script>
    document.write(window.innerWidth);
    document.write('<br/>');
    document.write(window.innerHeight);
</script>
@endsection
