<?php
// Made or Customized by DLEGER

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\models\MyMessage;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Elements de contact
     * @var array
     */
    public $contact; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(MyMessage $c)
    {
        //
        $this->contact = $c;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))->subject(env('MAIL_SUBJECT'))->view('email.email');
    }
}
