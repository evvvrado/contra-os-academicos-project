<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MarcaHistorico;

class MarcasHistoricosController extends Controller
{
    //
    public function consultar_precos(Request $request){
        $precos = MarcaHistorico::where("marca_id", $request->id_marca)->get();
        return response()->json($precos);
        // return response()->json("clicado");
    }
}
