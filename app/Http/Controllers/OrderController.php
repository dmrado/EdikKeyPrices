<?php


namespace App\Http\Controllers;

use App\Http\Controllers\UserController;
use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class OrderController extends Controller
{
    /**
     * Доставка данного заказа.
     *
     * @param  Request  $request
     * @param  int  $orderId
     * @return Response
     */

    public function sendMail(){
        $userData = new UserController();

        $name = $userData->name;
        $mail = UserController::mail;
        $phone = UserController::phone;
        $message = UserController::message;

        Mail::send('emails.orderShipped', array('key' => 'value'), function($message)
        {
            $email = 'dmrado@yandex.ru';
            $message->to($email, 'Джон Смит')->subject('Привет!');
        });
    }


    public function ship(Request $request, $orderId)
    {
        $order = Order::findOrFail($orderId);

        // Доставка заказа...

        Mail::to($request->user())->send(new OrderShipped($order));
    }
}