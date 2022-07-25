<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Blog;
use App\Models\Lista;
use App\Models\Revista;
use App\Models\Categoria;
use DB; 

class ConteudoIndex extends Component
{
    public $categoria_sql;
    public $categoria = [];

    public function mount() {
        $categorias = Categoria::all();
        $categorias_array = array();
        foreach($categorias as $categoria){
            array_push($categorias_array, $categoria->id);
        }
        $this->categoria_sql = $categorias_array;
    }

    public function filtrar()
    {
        $this->categoria_sql = $this->categoria;
    }
    
    public function render()
    {
        // dd($this->categoria_sql);
        $blogs = Blog::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereIn('categoria_id', $this->categoria_sql)
        ->orderBy('visitas', 'Asc')
        ->get();

        $revistas = Revista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereEmBreve(0)
        ->whereIn('categoria_id', $this->categoria_sql)
        ->orderBy('visitas', 'Asc')
        ->get();

        $listas = Lista::select(DB::raw("*"))
        ->whereStatus(1)
        ->whereIn('categoria_id', $this->categoria_sql)
        ->orderBy('visitas', 'Asc')
        ->get();
        // dd($blogs);
        return view('livewire.conteudo-index', ['blogs' => $blogs, 'revistas' => $revistas, 'listas' => $listas]);
    }
}
