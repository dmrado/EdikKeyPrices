@extends("layouts.agency")
<?php
/** @var $carBrands [Cardrand] */
/** @var $serv [Sevise] */
/** @var $caryear [Caryear] */
?>
@section('main')
<section>
    <div class="container"><!--нужен ли здесь параметр и какой-->
        <form action="" method="get" id="carSelect">
            <h2 align="center">Пожалуйста выберите свой автомобиль и тип нужного ключа</h2><br/>
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
            <input type="submit" id="getKeyImgs" value="Получить ключи">
            {{--три foreign key: carbrand_id  carmod_id  caryear_id отправляются в таблицу keys за urlами картинок ключей--}}
        </form>
        <div id="imgDiv">Вывод изображений ключей</div>
            {{--@foreach($keyDat as $keyImages)--}}
                                        {{--$keyImages->keyName;--}}
                                        {{--$keyImages->keySubscr;--}}
                                        {{--$keyImages->keyPict;--}}
            {{--@endforeach--}}
        <!--далее расписать что в popover что в div картинкой-->
    </div>
<br/>
<br/>
<br/>
    <div class="container">
        <form action="#" method="post" id="serviceSelect" enctype="application/x-www-form-urlencoded">
            <h2 align="center">Пожалуйста выберите услуги или пакет услуг</h2><br/>
                <div class="form-group">
                    <div class="row">
                        <label for="Пакет услуг" class="sr-only"></label><br/>
                        <select id="serviceSelect" name="first_level" multiple class="form-control">
                            <!--здеcь будем загружать наименование работ из БД и стоимость с подсчетом тотал-->
                            {{--@foreach($serv as $services)--}}
                                {{--<option value="{{$services->cost}}">{{$services->service}}</option>--}}
                            {{--@endforeach--}}

                        </select>
                    </div>
                </div><!--end 1 div class="form-group"-->

                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-4">
                        <button type="submit" class="btn btn-success" id="search">Подсчитать</button>
                    </div>
                </div>
        </form>
    </div>
</section>
<script>
    $(document).ready(function () {
        $('#serviceSelect').selectpicker();
    });
</script>

<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>

<script>$('#example').tooltip(options)</script>

<script>
    $(document).ready(function () {
        $('#first_level').change(function() {
            var selected = $(this).find('option:selected').val();
            //alert(selected);
            $('#second_level').html('');//очистка списка перед тем как выбрать
            $('#third_level').html('');//очистка списка перед тем как выбрать
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
//мы carmod_id потом передадим в базу для получения ключа вместе с годом выпуска и здесь типы данных года выпуска правильно сопоставить                        !!!!!!!!!!!!!!!!
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
@endsection
