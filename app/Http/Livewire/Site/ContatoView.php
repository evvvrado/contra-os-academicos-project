<?php

namespace App\Http\Livewire\Site;

use Livewire\Component;
use App\Mail\Site\Contato;
use Illuminate\Support\Facades\Mail;

class ContatoView extends Component
{
    public $ok = 'nao';
    public $nome;
    public $email;
    public $assunto;
    public $mensagem;


    public function enviar_email() {
        Mail::to('contraosacademicos@gmail.com.br')
        ->send(new Contato(['nome' => $this->nome, 'email' => $this->email, 'assunto' => $this->assunto, 'mensagem' => $this->mensagem]));

        $this->ok = 'sim';
    }
    
    public function render()
    {
        return view('livewire.site.contato-view');
    }
}
