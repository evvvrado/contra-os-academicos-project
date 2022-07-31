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
        $blogs = Blog::select(DB::raw("select * from blogs where status = 1 order by id desc limit ".$this->porpagina))
        ->get();

        $blogs = $blogs->sortDesc();

        return view('livewire.carregar-mais-blog', ['blogs' => $blogs]);
    }
}
