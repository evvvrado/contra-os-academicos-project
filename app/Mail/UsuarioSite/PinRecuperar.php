<?php

namespace App\Mail\UsuarioSite;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\UsuarioSite;

class PinRecuperar extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(UsuarioSite $usuariosite)
    {
        //
        $this->usuariosite = $usuariosite;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('contraosacademicos@gmail.com')
        ->subject('COA - Seu pin de acesso')
        ->with(['usuario_site' => $this->usuariosite])
        ->view('emails.template_pin_recuperar');
        // return $this->view('view.name');
    }
}
