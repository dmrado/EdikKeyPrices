<html>
    <body>
        <h3>Заказ от {{$name}}</h3>
            <p>
                {{$message}}
                {{$product2->getSummaryLine()}}
                Ответить отправителю {{$email}}
                Позвонить отправителю {{$phone}}
            </p>
    </body>
</html>