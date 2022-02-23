<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Produto;
use App\Models\Marca;
use App\Models\Ingrediente;
use App\Models\OrcamentoProdutosIngredienteMarca;

class OrcamentoProdutosIngredientesMarcasController extends Controller
{
    public function ingredienteTROCAR(Marca $marca, Ingrediente $ingrediente)
    {
        OrcamentoProdutosIngredienteMarca::where('ingrediente_id', $ingrediente->id)
        ->update(['marca_id' => $marca->id]);

        return redirect()->route("site.orcamento.carrinho");
    }
}
