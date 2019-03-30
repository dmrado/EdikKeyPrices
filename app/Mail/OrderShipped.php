<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class OrderShipped extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {// from забрать из form.blade.php client: customerMail, customerPhone, customerName
        return $this->  from (['address' => 'example@example.ru', 'name' => 'App name'])
                    ->  view('view.name');
        //order: customerOrderNum, first_level, second_level, third_level, costTotal
    }
}
