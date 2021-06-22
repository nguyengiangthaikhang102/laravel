<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RFIDMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       $name = $this->data['name'];

       return $this->subject('Subjec Mail')
                   ->view('RFID.mail',compact('name'))
                   ->attach($this->data['img']->getRealPath(),[
                       'as'=>$this ->data['img']->getClientOriginalName()
                   ]);

    }
}
