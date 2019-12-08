<?php


namespace App\Http\Controllers;
use App\CdProduct;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Сохранить нового пользователя.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
//dd(json_decode($request->getContent(), true)); как pre для массива

        $user = json_decode($request->getContent(), true);

        Mail::send('emails.orderShipped',
            [
                'email' => $user['mail'],
                'customerMessage' => $user['message'],
                'customerName' => $user['name'],
                'customerPhone' => $user['phone']
            ],
            function ($message)
            {
                $email = 'dmrado@ya.ru';
                $message->to($email, 'Дмитрий Радович')->subject('Сообщение на сайте chippy.ru');
//                $email = 'svan@inbox.ru';
//                $message->to($email, 'Эдуард Ратиани')->subject('Сообщение на сайте chippy.ru');
            });
        //массив превратится в json по умолчанию и отправится на фронтэнд
        return response()->json([
        'success' => true
         ]);
    }
//объекты всегда создаются в клиентском коде, сюда привязываем Route
    public function userDisplay(){
        $product2 = new CDProduct(
            "Классическая музыка. Лучшее",
            "Антонио",
            "Вивальди",
            10.99,
            0,
            60.33
        );

//метод из родительского класса вызывается для объекта текущего класса
        print "Исполнитель: {$product2->getProducer()}\n";
    }
}