<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\URL;

class Invite extends Mailable
{
    use Queueable, SerializesModels;

    protected $user;
    protected $token;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;

        $secret = config('custom.hmac_secret');
        $user_id = $this->user->id;
        $invite_token = $this->user->invite;
        $token = URL::to('/invite?token=').$user_id.";".$invite_token.";".hash_hmac('sha256', $user_id.$invite_token, $secret);
        $this->token = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.invite')->with([
            'user_name' => $this->user->name,
            'token' => $this->token,
        ]);
    }
}
