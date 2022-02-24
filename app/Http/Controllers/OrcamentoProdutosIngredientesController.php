<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ingrediente;
use App\Models\OrcamentoProduto;
use App\Models\OrcamentoProdutosIngredientes;
use App\Models\Marca;

class OrcamentoProdutosIngredientesController extends Controller
{
    public function ingredienteTROCAR(Marca $marca, Ingrediente $ingrediente, OrcamentoProduto $orcamentoproduto)
    {
        OrcamentoProdutosIngredientes::where('ingrediente_id', $ingrediente->id)
        ->where('orcamentoproduto_id', $orcamentoproduto->id)
        ->update(['marca_id' => $marca->id]);
        return redirect()->route("site.orcamento.carrinho");
    }
}
