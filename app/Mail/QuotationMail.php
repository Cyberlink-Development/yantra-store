<?php

namespace App\Mail;

use App\Model\Post;
use App\Model\Product;
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
        $productName = Product::where('id', $quotation->product_id)->value('product_name');
        $serviceName = Post::where('id', $quotation->service_id)->value('post_title');

        return $this->view('emails.quotation_mail', ['quotation'=>$quotation,'productName'=>$productName,'serviceName'=>$serviceName]);
    }
}
