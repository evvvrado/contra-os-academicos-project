<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Revista;
use App\Models\Lista;

class PesquisaIndex extends Component
{
    public $pesquisas; 
    public $blogs;
    public $revistas;
    public $listas;

    public function render()
    {
        if($this->pesquisas <> "") {
            $pesquisas = '%' . $this->pesquisas . '%';
        } else {
            $pesquisas = "";
        }
        $this->blogs = Blog::where('titulo', 'like', $pesquisas)
        ->whereStatus(1)
        ->get();
        $this->revistas = Revista::where('titulo', 'like', $pesquisas)
        ->whereEmBreve(0)
        ->whereStatus(1)
        ->get();
        $this->listas = Lista::where('titulo', 'like', $pesquisas)
        ->whereStatus(1)
        ->get();
        return view('livewire.pesquisa-index', ['blogs_pesquisa' => $this->blogs, 'revistas_pesquisa' => $this->revistas, 'listas_pesquisa' => $this->listas]);
    }
}
