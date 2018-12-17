<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
        @stack("head1")<!--здесь впушим селект из первого уровня марку машины-->
</head>
<body>
<br/>
<div class="container">

<div style="...">

        {{-- <form action="{{action("CarBrandController@getCarBrand", ["carbrand" => $carbrand_name->carbrand_name])}}"><!--стр 460 action --> --}}

        <div class="form-group">
            <h2 align="center">Выбирайте ключ для своего автомобиля</h2><br/>



                <label>Выберите</label><br/>

            <select id="first_level" name="first_level[]" multiple class="form-control">

                @if ($carbrand_name > 0);
            @foreach($carbrand_name as $row)

            <!--как правильно обратиться в к массиву в blade-->

                @php echo "<pre>";
                        print_r($carbrand_name);
                        echo "</pre>";
                @endphp

            @endforeach
            <li><option value="'.$row['carbrand_name'].'"></option></li>
            @endif
            </select>

        </div><!--end 1 div class="form-group"-->

        <div class="form-group">
            <label>Выберите</label><br/>
            <select id="second_level" name="second_level[]" multiple class="form-control">

            </select>
        </div><!--end 2 div class="form-group"-->

        <div class="form-group">
            <label>Выберите</label><br/>
            <select id="third_level" name="third_level[]" multiple class="form-control">

            </select>
        </div><!--end 3 div class="form-group"-->

        <div class="form-group">
            <label>Выберите</label><br/>
            <select id="fourth_level" name="fourth_level[]" multiple class="form-control">

            </select>
        </div><!--end 4 div class="form-group"-->
</div><!--end div style "..."-->


</div><!--end div container-->
</body>
</html>
<script>
    $(function () {
        $('#first_level').multiselect({
            nonSelectedText:'марку автомобиля',
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
            nonSelectedText: 'модель автомобиля',
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