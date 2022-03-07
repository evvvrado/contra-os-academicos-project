<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orcamento;
use App\Models\OrcamentoProduto;

class OrcamentoProdutosController extends Controller
{
    //
    public function alteraQTD($orcamento, $produto, $qtd){
        OrcamentoProduto::where('orcamento_id', $orcamento)
        ->where('produto_id', $produto)
        ->update(['qtd' => $qtd]);

        // $ingredientes = OrcamentoProdutosIngredientes::where("orcamentoproduto_id", $produto->id)
        // ->join('ingredientes', 'ingrediente_id', 'ingredientes.id')
        // ->get();

        // foreach($ingredientes as $ingrediente) {
        //     $marcas = MarcaIngrediente::where("ingrediente_id", $ingrediente->id)
        //     ->join('marcas', 'marca_id', 'marcas.id')
        //     ->get();

        //     foreach($marcas as $marca) {
        //         $total = $total + ($marca->valor * $produto->qtd);
        //     }
        // }

        return response()->json("att");

        // if ($professor->destaque) {
        //     $professor->destaque = false;
        //     $professor->save();
        //     return response()->json("retirado");
        // } else {
        //     $qtd = Professor::where("destaque", true)->count();
        //     if ($qtd == 20) {
        //         return response()->json("erro");
        //     }
        //     $professor->destaque = true;
        //     $professor->save();
        //     return response()->json("destacado");
        // }
    }
}
