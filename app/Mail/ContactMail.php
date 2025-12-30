<?php

namespace App\Mail;

use App\Model\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Http\Request;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
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
    public function build(Request $request)
    {
        $data = Setting::where('id',1)->first();
        
        return $this->view('emails.contact-mail', [
            'data' => $data,
            'request' => $request
        ])->subject('Inquiry');
    }
}
