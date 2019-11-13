<?php


namespace App\Http\Controllers;

use App\Order;
use App\Mail\OrderShipped;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
//use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    /**
     * Доставка данного заказа.
     *
     * @param  Request  $request
     * @param  int  $orderId
     * @return Response
     */

    //как принять с фронта и распаковать JSON объект

    public function sendMail(){
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