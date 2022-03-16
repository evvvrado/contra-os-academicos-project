<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use App\Models\Ingrediente;
use App\Models\Acessorio;
use App\Models\MarcaHistorico;
use App\Models\MarcaIngrediente;
use App\Models\MarcaAcessorio;
use DB;

class MarcasController extends Controller
{
    //
    public function consultar_ingrediente(Ingrediente $ingrediente){
        $marcas = MarcaIngrediente::where("ingrediente_id", $ingrediente->id)
        ->join('marcas', 'marca_id', 'marcas.id')
        ->get();

        return view("painel.marcas.consultar_ingredientes", ["marcas" => $marcas, "ingrediente" => $ingrediente]);
    }

    //
    public function consultar_acessorio(Acessorio $acessorio){
        $marcas = MarcaAcessorio::where("acessorio_id", $acessorio->id)
        ->join('marcas', 'marca_id', 'marcas.id')
        ->get();

        return view("painel.marcas.consultar_acessorios", ["marcas" => $marcas, "acessorio" => $acessorio]);
    }

    //
    public function altera_padrao_aces(Marca $marca, Acessorio $acessorio){
        MarcaAcessorio::where("acessorio_id", $acessorio->id)
        ->join('marcas', 'marca_id', 'marcas.id')
        ->update(['padrao' => 'Não']);

        Marca::where("id", $marca->id)
        ->update(['padrao' => 'Sim']);

        $marcas = MarcaAcessorio::where("acessorio_id", $acessorio->id)
        ->join('marcas', 'marca_id', 'marcas.id')
        ->get();

        return redirect()->route("painel.marcas.acessorios", ['acessorio' => $acessorio]);
    }

    //
    public function altera_padrao_ingr(Marca $marca, Ingrediente $ingrediente){
        MarcaIngrediente::where("ingrediente_id", $ingrediente->id)
        ->join('marcas', 'marca_id', 'marcas.id')
        ->update(['padrao' => 'Não']);

        Marca::where("id", $marca->id)
        ->update(['padrao' => 'Sim']);

        $marcas = MarcaIngrediente::where("ingrediente_id", $ingrediente->id)
        ->join('marcas', 'marca_id', 'marcas.id')
        ->get();

        return redirect()->route("painel.marcas.ingredientes", ['ingrediente' => $ingrediente]);
    }

    //
    public function cadastro(Request $request){
        return view("painel.marcas.cadastro");
    }

    public function cadastrar(Request $request){
        $marca = new Marca;
        $marca->nome = $request->nome;
        if($request->padrao == "") {
            $marca->padrao = "Não";
        }else {
            $marca->padrao = $request->padrao;
        }
        
        $valor = str_replace(",", ".", $request->preco);
        $marca->valor = $valor;
        $marca->unidade_medida = $request->unidade_medida;
        $marca->nome_unidade = $request->nome_unidade;
        $marca->qtd = $request->qtd;
        $marca->qtd_pacote = $request->qtd_pacote;
        $marca->nome_pacote = $request->nome_pacote;
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

            Marca::where('id', $marca->id)
            ->update(['imagem' => '/admin/images/marcas/'.$marca->id."/".$nome_1]);
        }

        if($request->tabela == "ingredientes") {
            $marca_ingrediente = new MarcaIngrediente;
            $marca_ingrediente->marca_id = $marca->id;
            $marca_ingrediente->ingrediente_id = $request->id_ingrediente;
            $marca_ingrediente->save();

            $url = "painel.ingredientes";
        } else {
            $marca_acessorio = new MarcaAcessorio;
            $marca_acessorio->marca_id = $marca->id;
            $marca_acessorio->acessorio_id = $request->id_acessorio;
            $marca_acessorio->save();

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
        ->update(['nome' => $request->nome, 'nome_unidade' => $request->nome_unidade, 'valor' => $valor, 'qtd' => $request->qtd, 'qtd_pacote' => $request->qtd_pacote, 'unidade_medida' => $request->unidade_medida, 'nome_pacote' => $request->nome_pacote]);
        
        if($request->hasFile('imagem')){
            // unlink(public_path('/admin/images/usuarios/'.$usuario->imagem));
            $image = $request->file('imagem');
            $nome_1 = 'imagem.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/marcas/'.$request->id_marca."/");
            $image->move($destinationPath, $nome_1);

            Marca::where('id', $request->id_marca)
            ->update(['imagem' => '/admin/images/marcas/'.$request->id_marca."/".$nome_1]);
        }

        toastr()->success("Marca salva com sucesso!");
        
        if($request->tabela == "ingredientes") {
            return redirect()->route("painel.marcas.ingredientes", ['ingrediente' => $request->id_ingrediente]);
        } else {
            return redirect()->route("painel.marcas.acessorios", ['acessorio' => $request->id_acessorio]);
        }

    }
}
