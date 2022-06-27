<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class PesquisaIndex extends Component
{
    public $pesquisas; 
    public $blogs;

    public function render()
    {
        if($this->pesquisas <> "") {
            $pesquisas = '%' . $this->pesquisas . '%';
        } else {
            $pesquisas = "";
        }
        $this->blogs = Blog::where('titulo', 'like', $pesquisas)->get();
        return view('livewire.pesquisa-index', ['blogs_pesquisa' => $this->blogs]);
    }
}
