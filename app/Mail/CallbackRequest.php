<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CallbackRequest extends Mailable
{
    use Queueable, SerializesModels;

    protected $name = "";
    protected $company = "";
    protected $email = "";
    protected $telephone = "";
    protected $reqtype = "grease trap";

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        //
        $this->name = $request["name"];
        $this->company = $request["company"];
        $this->email = $request["email"];
        $this->telephone = $request["telephone"];
        $this->reqtype = $request["reqtype"];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $data = [
            'name' => $this->name,
            'company' => $this->company,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'reqtype' => $this->reqtype,
        ];

        return $this->markdown('emails.callbackrequest', $data);
    }
}
