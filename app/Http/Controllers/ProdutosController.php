<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\ProdutosIngrediente;
use App\Models\ProdutosAcessorio;
use Illuminate\Support\Facades\Storage;

class ProdutosController extends Controller
{
    //
    public function consultar(Request $request){
        $produtos = Produto::all();
        return view("painel.produtos.consultar", ["produtos" => $produtos]);
    }
    
    public function cadastro(){
        return view("painel.produtos.cadastro");
    }

    public function editar(Produto $produto){
        return view("painel.produtos.editar", ["produto" => $produto]);
    }

    public function deletar(Produto $produto){
        $produto->delete();

        toastr()->success("Produto deletado com sucesso!");

        return redirect()->back();
    }

    public function salvar(Request $request){
        if($request->produto_id){
            $produto = Produto::find($request->produto_id);
        }else{
            $produto = new Produto;
        }
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->historia = $request->historia;
        $produto->teor_alcoolico = $request->teor_alcoolico;
        $produto->calorias = $request->calorias;
        $produto->nota = $request->nota;
        $produto->harmonizacao = $request->harmonizacao;
        $produto->lancamento = $request->lancamento;

        if($request->hasFile('imagem_preview')){
            Storage::delete($produto->imagem_preview);
            $produto->imagem_preview = $request->file("imagem_preview")->store("site/imagens/produtos", 'local');
        }

        if($request->hasFile('imagem_detalhes')){
            Storage::delete($produto->imagem_detalhes);
            $produto->imagem_detalhes = $request->file("imagem_detalhes")->store("site/imagens/produtos", 'local');
        }

        $produto->save();

        $produto->acessorios()->sync($request->acessorios);

        toastr()->success("produto salvo com sucesso!");

        return redirect()->route("painel.produtos");

    }
}
