<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Сохранить нового пользователя.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        static $name;
        static $mail;
        static $phone;
        static $message;

        $name = $request->input('name');
        $mail = $request->input('mail');
        $phone = $request->input('phone');
        $message = $request->input('$message');

        // здесь с переменной name можно что-нибудь сделать
    }
}