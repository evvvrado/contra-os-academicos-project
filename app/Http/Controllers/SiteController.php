<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use DB;
use App\Models\Noticia;
use App\Models\Anuncio;
use App\Models\Produto;
use App\Models\Depoimento;
use App\Models\Cliente;
use App\Models\Duvida;
use App\Models\ProdutosIngrediente;

class SiteController extends Controller
{
    public function mapa()
    {
        return view("site.mapa");
    }

    public function index()
    {
        $noticias = Noticia::select(DB::raw("id, preview, titulo, publicacao"))
        ->orderBy('id', 'Desc')
        ->limit('3')
        ->get();

        $produtos = Produto::all();

        $publicidade = Anuncio::first();

        return view("site.index", ["produtos" => $produtos, "noticias" => $noticias, "publicidade" => $publicidade]);
    }

    public function sobre()
    {
        $depoimentos = Depoimento::all();

        return view("site.sobre", ["depoimentos" => $depoimentos]);
    }

    public function servicos()
    {
        return view("site.servicos");
    }

    public function blog()
    {
        $noticias = Noticia::all();

        return view("site.blog", ["noticias" => $noticias]);
    }

    public function blogDetalhes(Noticia $noticia)
    {
        return view("site.blog-detalhes", ["noticia" => $noticia]);
    }

    public function contato()
    {
        $duvidas = Duvida::all();

        return view("site.contato", ["duvidas" => $duvidas]);
    }

    public function coqueteis()
    {
        return view("site.coqueteis");
    }

    public function coquetel(Produto $produto)
    {
        $ingredientes = ProdutosIngrediente::where('produto_id', $produto->id)
        ->join('ingredientes', 'ingrediente_id', 'ingredientes.id')
        ->get();

        $produtos = Produto::whereNotIn("id", $produto)->get();

        if($produto->mais_visitados) {
            Produto::where('id', $produto->id)
            ->update(['mais_visitados' => $produto->mais_visitados + 1]);
        } else {
            Produto::where('id', $produto->id)
            ->update(['mais_visitados' => 1]);
        }

        return view("site.coquetel", ['produto' => $produto, 'ingredientes' => $ingredientes, 'produtos' => $produtos,]);
    }

    public function acessarCliente()
    {
        if (session()->get("cliente")) {
            return redirect()->route("minha-area.cliente");
        }else {
            toastr()->success("Faça login para continuar!");
            return view("site.acesso");
        }
    }

    public function logarCliente(Request $request)
    {
        $cliente = Cliente::where("email", $request->email)->first();
        if($cliente){
            if($request->senha == $cliente->senha){
                session()->put(["cliente" => $cliente->toArray()]);
                session()->put(["lead" => $cliente->toArray()]);
                return redirect()->route("minha-area.cliente");
            }else{
                toastr()->error("Informações de usuário incorretas!");
            }
        }else{
            toastr()->error("Informações de usuário incorretas!");
        }

        return redirect()->back();

        // return view("site.acesso");
    }
}
