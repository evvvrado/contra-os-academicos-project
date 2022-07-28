<?php

namespace App\Mail\Site;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($arrayDados)
    {
        $this->nome = $arrayDados['nome'];
        $this->email = $arrayDados['email'];
        $this->assunto = $arrayDados['assunto'];
        $this->mensagem = $arrayDados['mensagem'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)
        ->subject('COA Novo Contato')
        ->with(['nome' => $this->nome, 'email' => $this->email, 'assunto' => $this->assunto, 'mensagem' => $this->mensagem ])
        ->view('emails.site.contato');
        // return $this->view('view.name');
    }
}
