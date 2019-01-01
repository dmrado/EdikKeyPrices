@extends(request()->route()->getController()->parentView)
<?php
/** @var $carBrands [Cardrand] */
?>
<style>
    #pad{
        padding-top: 25px;
        padding-bottom: 25px;
        padding-right: 50px;
        padding-left: 50px;
    }
</style>
<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />

<section>
        <h2 align="center">Пожалуйста выберите свой автомобиль и тип нужного ключа</h2><br/>

    <!--Форма из контактной -->
    <div class="row">
        <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="марка" class="sr-only"></label><br/>
                            <select id="first_level" name="first_level" multiple class="form-control">

                                {{--@foreach($carBrands as $row)--}}
                                {{--<option value="{{$row->carbrand_id}}">{{$row->carbrand_name}}</option>--}}
                                {{--@endforeach--}}

                            </select>
                        </div><!--end 1 div class="form-group"-->
                        <div class="form-group">
                            <label for="модель" class="sr-only"></label><br/>
                            <select id="second_level" name="second_level[]" multiple class="form-control">

                            </select>
                        </div><!--end 2 div class="form-group"-->
                        <div class="form-group">
                            <label for="год выпуска" class="sr-only"></label><br/>
                            <select id="third_level" name="third_level[]" multiple class="form-control">

                            </select>
                        </div><!--end 3 div class="form-group"-->
                        <div class="form-group">
                            <label for="год выпуска" class="sr-only"></label><br/>
                            <select id="fourth_level" name="fourth_level[]" multiple class="form-control">

                            </select>
                        </div><!--end 4 div class="form-group"-->


                    {{--</div>--}}
                    {{--<div class="col-md-6">--}}
                        {{--<div class="form-group">--}}
                            {{--<textarea class="form-control" id="message" placeholder="Ваше сообщение *" required="required" data-validation-required-message="Please enter a message."></textarea>--}}
                            {{--<p class="help-block text-danger"></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<div class="col-lg-12 text-center">--}}
                        {{--<div id="success"></div>--}}
                        {{--<button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Отправить</button>--}}
                    {{--</div>--}}

                </div>
            </form>
        </div>
    </div>




    {{--<div class="form-group">--}}
    {{--</div><!--end 1 div class="form-group"-->--}}

    {{--<div class="form-group">--}}
    {{--</div><!--end 2 div class="form-group"-->--}}

    {{--<div class="form-group">--}}
    {{--</div><!--end 3 div class="form-group"-->--}}

    {{--<div class="form-group">--}}
        {{--<label for="год выпуска" class="sr-only"></label><br/>--}}
        {{--<select id="fourth_level" name="fourth_level[]" multiple class="form-control">--}}

        {{--</select>--}}
    {{--</div><!--end 4 div class="form-group"-->--}}
</section>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-4">
        <button type="submit" class="btn btn-success" id="search">Найти</button>
        </div>
    </div>
</form>
<script>
    $(function () {
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
                var selected = this.$select.val();
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