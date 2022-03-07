<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ingrediente;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutosIngredientes;
use App\Models\Marca;

class OrcamentoProdutosIngredientesController extends Controller
{
    public function ingredienteTROCAR($marca, $ingrediente, $orcamentoproduto)
    {
        OrcamentoProdutosIngredientes::where('ingrediente_id', $ingrediente)
        ->where('orcamentoproduto_id', $orcamentoproduto)
        ->update(['marca_id' => $marca]);
        return redirect()->route("site.orcamento.carrinho");
    }
}
