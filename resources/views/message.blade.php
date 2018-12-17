<!DOCTYPE html>
/**
 * Created by PhpStorm.
 * User: dmrado
 * Date: 26.11.2018
 * Time: 20:36
 */
<html>
    <head>
        <title>AJAX example</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
                <script>
                function getMessage(){
                    $.ajax ({
                        type:'POST',
                        url:'/getmsg',
                        data:'_token = <?php echo csrf_token()?>',
                        success: function (data) {
                            $("#msg").html(data.msg);
                        }
                    });
                }
            </script>
    </head>
<body>
<div id ='msg'>Это сообщение изменено AJAX, нажми кнопку</div>
<?php echo Form::button('Replace Message', ['onClick' => 'getMessage()']);?>

</body>

</html>
?>