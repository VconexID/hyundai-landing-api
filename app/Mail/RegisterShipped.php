<?php

namespace App\Mail;

use App\Models\visitor;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegisterShipped extends Mailable
{
    use Queueable, SerializesModels;

    public $visitor;

    public function __construct(visitor $visitor)
    {
        $this->visitor = $visitor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.register');
    }
}
