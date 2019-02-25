<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($orderId,$showSeat,$name)
    {
        $this->orderId = $orderId;
        $this->showSeat = $showSeat;
        $this->name = $name;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('no-reply@humdramaku.com','Humdramaku')
            ->subject('Welcome to humdramaku.com')
            ->view('emails.test',['orderid'=>$this->orderId , 'showSeat'=>$this->showSeat , 'name'=>$this->name]);
    }
}
