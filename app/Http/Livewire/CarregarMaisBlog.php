<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;

class CarregarMaisBlog extends Component
{
    public $porpagina = 12;   

    public function carregarMais()
    {
        $this->porpagina = $this->porpagina + 6;
    }

    public function render()
    {
        $blogs = Blog::paginate($this->porpagina)
        ->where('status', 1);

        $blogs = $blogs->sortDesc();

        return view('livewire.carregar-mais-blog', ['blogs' => $blogs]);
    }
}
