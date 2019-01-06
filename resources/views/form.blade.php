@extends("layouts.agency")
<?php
/** @var $carBrands [Cardrand] */
?>

<section>
    <div class="container">
        <form action="#" method="post" id="carSelect">
            <h2 align="center">Пожалуйста выберите свой автомобиль и тип нужного ключа</h2><br/>
                <div class="form-group">
                    <div class="row">
                        <label for="марка" class="sr-only"></label><br/>
                            <select id="first_level" name="first_level" class="form-control">

                                {{--@foreach($carBrands as $row)--}}
                                {{--<option value="{{$row->carbrand_id}}">{{$row->carbrand_name}}</option>--}}
                                {{--@endforeach--}}

                            </select>
                    </div>
                </div><!--end 1 div class="form-group"-->
                <div class="form-group">
                    <div class="row">
                        <label for="модель" class="sr-only"></label><br/>
                            <select id="second_level" name="second_level[]" class="form-control">

                            </select>
                    </div>
                </div><!--end 2 div class="form-group"-->
                <div class="form-group">
                    <div class="row">
                        <label for="год выпуска" class="sr-only"></label><br/>
                            <select id="third_level" name="third_level[]" class="form-control">

                            </select>
                    </div>
                </div><!--end 3 div class="form-group"-->
                <div class="form-group">
                    <div class="row">
                        <label for="год выпуска" class="sr-only"></label><br/>
                            <select id="fourth_level" name="fourth_level[]" class="form-control">

                            </select>
                    </div>
                </div><!--end 4 div class="form-group"-->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-4">
                <button type="submit" class="btn btn-success" id="search">Найти</button>
                </div>
            </div>
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
        $('#first_level').multiselect({
            nonSelectedText:'марка',
            buttonWidth:'400px',
            onChange:function(option, checked){
                $('#second_level').html('');
                $('#second_level').multiselect('rebuild');
                $('#third_level').html('');
                $('#third_level').multiselect('rebuild');
                $('#fourth_level').html('');
                $('#fourth_level').multiselect('rebuild');
                var selected = this.val();
                if(selected.lenght > 0){
                    $.ajax({
                        url:"/getCarBrand",
                        method:"POST",
                        data:{selected:selected},
                        success:function(data){
                            $('#second_level').html(data);
                            $('#second_level').multiselect('rebuild');
                        }//end success
                    });//end ajax
                }//end if
            }// end onChange first_level
        });//end first_level.multiselect

        $('#second_level').multiselect({
            nonSelectedText: 'модель',
            buttonWidth: '400px',
            onChange:function(option, checked){
                $('#third_level').html('');
                $('#third_level').multiselect('rebuild');
                $('#fourth_level').html('');
                $('#fourth_level').multiselect('rebuild');
                var selected = this.$select.val();
                if(selected.lenght > 0){
                    $.ajax({
                        url:"/getCarMod",
                        method:"POST",
                        data:{selected:selected},
                        success:function(data){
                            $('#third_level').html(data);
                            $('#third_level').multiselect('rebuild');
                        }//end success
                    });//end ajax
                }//end if
            }// end onChange second_level
        });//end #second_level.multiselect

        $('#third_level').multiselect({
            nonSelectedText:'год выпуска',
            buttonWidth:'400px',
            onChange:function(option, checked) {
                $('#fourth_level').html(data);
                $('#fourth_level').multiselect('rebuild');
                var selected = this.$select.val();
                if(selected.lenght > 0){
                    $.ajax({
                        url:"getCarYear",
                        method:"POST",
                        data:{selected:selected},
                        success:function () {
                            $('#fourth_level').html(data);
                            $('#fourth_level').multiselect('rebuild');
                        }//end success
                    });//end ajax
                }//end if
            }//end onChange
        });//end third_level.multiselect

        $('#fourth_level').multiselect({
            nonSelectedText:'тип ключа',
            buttonWidth:'400px'
        });//end fourth_level.multiselect
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