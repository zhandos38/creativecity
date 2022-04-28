<?php

namespace App\Mail;

use App\Models\CallRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $model;

    /**
     * Create a new message instance.
     *
     * @param CallRequest $model
     */
    public function __construct(CallRequest $model)
    {
        $this->model = $model;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $order_id = $this->model->id;
        $domain_name = request()->getHost();

        return $this->view('mails.order', compact('domain_name'))
            ->subject("Новый запрос с сайта $domain_name #$order_id");
    }
}
