<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use DB;

class CarregarMaisBlog extends Component
{
    public $porpagina = 12;   

    public function carregarMais()
    {
        $this->porpagina = $this->porpagina + 6;
    }

    public function render()
    {
        $blogs = Blog::where('status', 1)
        ->orderBy('id', 'Desc')
        ->paginate($this->porpagina);

        return view('livewire.carregar-mais-blog', ['blogs' => $blogs]);
    }
}
