<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\ProdutosIngrediente;
use App\Models\ProdutosAcessorio;
use DB;

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

    public function salvar(Request $request) {
        Produto::where('id', $request->id)
        ->update(['nome' => $request->nome, 'descricao' => $request->descricao, 'historia' => $request->historia, 'teor_alcoolico' => $request->teor_alcoolico, 'calorias' => $request->calorias, 'nota' => $request->nota, 'harmonizacao' => $request->harmonizacao, 'lancamento' => $request->lancamento]);

        ProdutosIngrediente::where('produto_id', $request->id)->delete();
        ProdutosAcessorio::where('produto_id', $request->id)->delete();

        $ingredientes = $request->ingredientes;

        $produtos_ingrediente = new ProdutosIngrediente;
        $produtos_ingrediente->produto_id = $request->ingrediente;
        foreach ($ingredientes as $ingrediente) {
            $produtosingrediente = new produtosIngrediente;
            $produtosingrediente->produto_id = $request->id;
            $produtosingrediente->ingrediente_id = $ingrediente;
            $produtosingrediente->save();
        }

        $acessorios = $request->acessorios;
        
        if($acessorios) {
            $produtos_acessorios = new ProdutosAcessorio;
            $produtos_acessorios->produto_id = $request->acessorio;
            foreach ($acessorios as $acessorio) {
                $produtosacessorio = new ProdutosAcessorio;
                $produtosacessorio->produto_id = $request->id;
                $produtosacessorio->acessorio_id = $acessorio;
                $produtosacessorio->save();
            }
        }

        if($request->hasFile('imagem_1')){
            // unlink(public_path('/admin/images/usuarios/'.$usuario->imagem_1));
            $image = $request->file('imagem_1');
            $nome_1 = 'imagem_1.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/produtos/'.$request->id."/");
            $image->move($destinationPath, $nome_1);

            Produto::where('id', $request->id)
            ->update(['imagem_1' => '/admin/images/produtos/'.$request->id."/".$nome_1]);
        }

        if($request->hasFile('imagem_2')){
            // unlink(public_path('/admin/images/produtos//'.$usuario->imagem_2));
            $image = $request->file('imagem_2');
            $nome_2 = 'imagem_2.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/produtos/'.$request->id."/");
            $image->move($destinationPath, $nome_2);

            Produto::where('id', $request->id)
            ->update(['imagem_2' => '/admin/images/produtos/'.$request->id."/".$nome_2]);
        }

        toastr()->success("produto salvo com sucesso!");

        return redirect()->route("painel.produtos");
    }

    public function deletar(Produto $produto){
        $produto->delete();

        toastr()->success("Produto deletado com sucesso!");

        return redirect()->back();
    }

    public function cadastrar(Request $request){
        $produtos = new produto;
        $produtos->nome = $request->nome;
        $produtos->descricao = $request->descricao;
        $produtos->historia = $request->historia;
        $produtos->teor_alcoolico = $request->teor_alcoolico;
        $produtos->calorias = $request->calorias;
        $produtos->nota = $request->nota;
        $produtos->harmonizacao = $request->harmonizacao;
        $produtos->lancamento = $request->lancamento;

        $produtos->save();

        $produto_id = Produto::select(DB::raw("id"))
        ->orderBy('id', 'Desc')
        ->limit('1')
        ->first();

        $produtos = new produto;

        if($request->hasFile('imagem_1')){
            // unlink(public_path('/admin/images/usuarios/'.$usuario->imagem_1));
            $image = $request->file('imagem_1');
            $nome_1 = 'imagem_1.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/produtos/'.$produto_id->id."/");
            $image->move($destinationPath, $nome_1);
            $produtos->imagem_1 = $nome_1;
        }

        if($request->hasFile('imagem_2')){
            // unlink(public_path('/admin/images/produtos//'.$usuario->imagem_2));
            $image = $request->file('imagem_2');
            $nome_2 = 'imagem_2.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/admin/images/produtos/'.$produto_id->id."/");
            $image->move($destinationPath, $nome_2);
            $produtos->imagem_2 = $nome_2;
        }

        Produto::where('id', $produto_id->id)
        ->update(['imagem_1' => '/admin/images/produtos/'.$produto_id->id."/".$nome_1, 'imagem_2' => '/admin/images/produtos/'.$produto_id->id."/".$nome_2]);

        $ingredientes = $request->ingredientes;

        $produtos_ingrediente = new ProdutosIngrediente;
        $produtos_ingrediente->produto_id = $request->ingrediente;
        foreach ($ingredientes as $ingrediente) {
            $produtosingrediente = new produtosIngrediente;
            $produtosingrediente->produto_id = $produto_id->id;
            $produtosingrediente->ingrediente_id = $ingrediente;
            $produtosingrediente->save();
        }

        $acessorios = $request->acessorios;

        if($acessorios) {
            $produtos_acessorios = new ProdutosAcessorio;
            $produtos_acessorios->produto_id = $request->acessorio;
            foreach ($acessorios as $acessorio) {
                $produtosacessorio = new ProdutosAcessorio;
                $produtosacessorio->produto_id = $produto_id->id;
                $produtosacessorio->acessorio_id = $acessorio;
                $produtosacessorio->save();
            }
        }

        toastr()->success("produto salvo com sucesso!");

        return redirect()->route("painel.produtos");

    }
}
