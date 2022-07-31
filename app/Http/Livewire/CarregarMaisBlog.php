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
        $blogs = DB::select("select * from blogs where status = 1 order by id desc limit ".$this->porpagina);
        foreach($blogs as $blog){
            echo $blog->titulo;
        }

        return view('livewire.carregar-mais-blog', ['blogs' => $blogs]);
    }
}
