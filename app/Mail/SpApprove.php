<?php

namespace App\Mail;

use App\Models\ServiceProvider;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SpApprove extends Mailable
{
    use Queueable, SerializesModels;

    public $serviceProvider;

    /**
     * Create a new message instance.
     */
    public function __construct(ServiceProvider $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
    }

    public function build()
    {
        return $this->view('emails.spapprove')
                    ->subject('Service Provider Has Been Approved')
                    ->with(['serviceProvider' => $this->serviceProvider]);
    }
}
