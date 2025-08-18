<?php

namespace App\Mail;

use App\Model\Quotation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class QuotationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    protected $quotation_id;

    public function __construct($quotation_id)
    {
        $this->quotation_id = $quotation_id;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $quotation = Quotation::find($this->quotation_id);

        return $this->view('emails.quotation_mail', ['quotation'=>$quotation]);
    }
}
