<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Ingrediente;
use App\Models\Acessorio;
use App\Models\MarcaHistorico;
use App\Models\MarcaIngrediente;
use DB;

class MarcasController extends Controller
{
    //
    public function consultar(Request $request){
        $marcas = Marca::all();
        return view("painel.marcas.consultar", ["marcas" => $marcas]);
    }

    //
    public function cadastro(Request $request){
        return view("painel.marcas.cadastro");
    }

    public function cadastrar(Request $request){
        $marca = new Marca;
        $marca->nome = $request->nome;
        $marca->padrao = $request->padrao;
        $valor = str_replace(",", ".", $request->preco);
        $marca->valor = $valor;
        $marca->unidade_medida = $request->unidade_medida;
        $marca->qtd = $request->qtd;
        $marca->qtd_pacote = $request->qtd_pacote;
        $marca->save();

        $marca_historico = new MarcaHistorico;
        $marca_historico->marca_id = $marca->id;
        $marca_historico->valor = $valor;
        $marca_historico->save();

        if($request->hasFile('imagem')){
            // unlink(public_path('/admin/images/usuarios/'.$usuario->imagem));
            $image = $request->file('imagem');
            $nome_1 = 'imagem.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/marcas/'.$marca->id."/");
            $image->move($destinationPath, $nome_1);
        }

        Marca::where('id', $marca->id)
        ->update(['imagem' => '/admin/images/marcas/'.$marca->id."/".$nome_1]);

        if($request->tabela == "ingredientes") {
            $marca_ingrediente = new MarcaIngrediente;
            $marca_ingrediente->marca_id = $marca->id;
            $marca_ingrediente->ingrediente_id = $request->id_ingrediente;
            $marca_ingrediente->save();

            $url = "painel.ingredientes";
        } else {
            Acessorio::where('id', $request->id_acessorio)
            ->update(['marca_id' => $marca->id]);

            $url = "painel.acessorios";
        }

        toastr()->success("Marca salva com sucesso!");

        return redirect()->route($url);

    }

    public function salvar(Request $request){

        $valor_antigo = Marca::select(DB::raw("valor"))
        ->where('id', '=', $request->id_marca)
        ->first();

        if($valor_antigo->valor != $request->preco) {
            $marca_historico = new MarcaHistorico;
            $marca_historico->marca_id = $request->id_marca;
            $valor = str_replace(",", ".", $request->preco);
            $marca_historico->valor = $valor;
            $marca_historico->save();
        }

        $valor = str_replace(",", ".", $request->preco);

        Marca::where('id', $request->id_marca)
        ->update(['nome' => $request->nome, 'padrao' => $request->padrao, 'valor' => $valor, 'qtd' => $request->qtd, 'qtd_pacote' => $request->qtd_pacote, 'unidade_medida' => $request->unidade_medida]);

        if($request->tabela == "ingredientes") {
            $url = "painel.ingredientes";
        } else {
            $url = "painel.acessorios";
        }
        

        toastr()->success("Marca salva com sucesso!");

        return redirect()->route($url);

    }
}
