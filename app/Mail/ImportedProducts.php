<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ImportedProducts extends Mailable
{
    use Queueable, SerializesModels;

    public $file;
    public $qty;

    /**
     * Create a new message instance.
     *
     * @param $file
     * @param $qty
     */
    public function __construct($file, $qty)
    {
        $this->file = $file;
        $this->qty = $qty;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("[SquadCommerce] | Notification Imported products")
            ->view('emails.admin.products.imported-products')
            ->with([
                'file' => $this->file,
                'qty' => $this->qty
            ]);
    }
}
