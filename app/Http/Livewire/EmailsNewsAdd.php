<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmailsNew;

class EmailsNewsAdd extends Component
{
    public $email;
   
    public function save()
    {
        $validatedData = $this->validate([
            'email' => 'required|unique:emails_news',
        ]);
   
        EmailsNew::create($validatedData);

        $this->dispatchBrowserEvent( 'sumir_news', [
            'message' =>  'Seu e-mail foi salvo em nossa base!',
        ]);
    }

    public function render()
    {
        return view('livewire.emails-news-add');
    }
}
