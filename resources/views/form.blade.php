@extends("layouts.agency")
<?php
/** @var $carBrands [Cardrand] */
?>
@section('main')
<section>
    <div class="container">
        <form action="#" method="post" id="carSelect">
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
                            <select id="second_level" name="second_level[]" class="form-control">

                            </select>
                    </div>
                {{--</div><!--end 2 div class="form-group"-->--}}
                {{--<div class="form-group">--}}
                    {{--<div class="row">--}}
                        {{--<label for="год выпуска" class="sr-only"></label><br/>--}}
                            {{--<select id="third_level" name="third_level[]" class="form-control">--}}

                            {{--</select>--}}
                    {{--</div>--}}
                {{--</div><!--end 3 div class="form-group"-->--}}
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
        </form>
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
                            <option>Mustard</option>
                            <option>Ketchup</option>
                            <option>Barbecue</option>
                            <option>Mustard1</option>
                            <option>Ketchup1</option>
                            <option>Barbecue1</option><option>Mustard</option>


                            <!--здеcь будем загружать наименование работ из БД и стоимость с подсчетом тотал-->

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
    $(document).ready(function () {
        $('#first_level').change(function() {
            var selected = $(this).find('option:selected').val();
            alert(selected);
            $('#second_level').html('');//очистка списка перед тем как выбрать
            $.ajax({
                url:"/EdikKeyPrices/public/getCarMod/"+ selected,
                method:"GET",
                dataType: "json",
                encode: "true",
                //data:{selected:selected},
                success:function(data){
                    console.log(data);
                    for (var i = 0; i < data.length; i ++){
                        $('#second_level')
                            .append('<option value="'+ data[i].carmod_id +'">' + data[i].carmod_name + '</option>')
                    }
                }//end success
            });//end ajax
        });//end first_level

        $('#second_level').change(function() {
            var selected = $(this).find('option:selected').val();
            alert(selected);
            // $.ajax({
            //     url:"/EdikKeyPrices/public/getCarMod/"+ selected,
            //     method:"GET",
            //     dataType: "json",
            //     encode: "true",
            //     //data:{selected:selected},
            //     success:function(data){
            //         console.log(data);
            //         for (var i = 0; i < data.length; i ++){
            //             $('#second_level')
            //                 .append('<option value="'+ data[i].carmod_id +'">' + data[i].car_acces + '</option>')
            //         }
            //     }//end success
            // });//end ajax
        });//end first_level


    })//end ready
</script>


<div id="page-wrapper"></div>
<script>
    var serviceSelect = document.getElementById('serviceSelect');
    serviceSelect.addEventListener('submit', function showTotal(evt) {
        var oAJAX = new XMLHttpRequest();
        var requestServ = evt.target;
        var s = "";
        var cEls = requestServ.elements;
        for(i in cEls){
            if(s!=="") s+="&";
            s = cEls[i];
        }
        oAJAX.open(requestServ.action, requestServ.method, true);
        oAJAX.setRequestHeader('Content-type', requestServ.enctype);
        oAJAX.addEventListener('readystatechange', function (evt) {
            if((evt.target.readyState===4)&&(evt.target.status===200)){
                var r = evt.target.responseText;
                //обработать возвращенный массив
                createDynamicTable(tableName, columns, 'page-wrapper');
            }
        });//end listener for oAJAX
        oAJAX.send(s);
        evt.preventDefault();
    });
</script>
@endsection