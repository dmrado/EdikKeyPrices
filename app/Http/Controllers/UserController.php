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
//    dd(json_decode($request->getContent(), true)); //как pre для массива

        $user = json_decode($request->getContent(), true);
    //отправка продукта пример в классе CDProduct прописать select выбранного из базы продукта
        $product2 = new CDProduct(
            "Классическая музыка. Лучшее",
            "Антонио",
            "Вивальди",
            10.99,
            0,
            60.33
        );//сверху подключить класс use CDProduct

        Mail::send('emails.orderShipped',
            [
                'name' => $user['name'],
                'email' => $user['mail'],
                'message' => $user['message'],
                'phone' => $user['phone'],
                'product2' => $product2
            ],
            function ($message)
            {
                $email = 'svan@mail.ru';
                $message->to($email, 'Эдуард Ратиани')->subject('Заявка на сайте chippy.ru');
            });
        //массив превратится в json по умолчанию и отправится на фронтэнд
        return response()->json([
        'success' => true
         ]);
    }
}