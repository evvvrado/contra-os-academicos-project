<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anuncio;
use Illuminate\Support\Facades\Storage;

class AnunciosController extends Controller
{
    //

    public function editar(Anuncio $anuncio)
    {
        return view("painel.anuncios.editar", ['anuncio' => $anuncio]);
    }

    public function cadastrar()
    {
        return view("painel.anuncios.cadastrar");
    }

    public function salvar(Request $request)
    {

        if ($request->anuncio_id) {
            $anuncio = Anuncio::find($request->anuncio_id);
        } else {
            $anuncio = new Anuncio;
        }

        $anuncio->nome = $request->nome;
        $anuncio->url = $request->url;

        if ($request->file("imagem_mobile")) {
            Storage::delete($anuncio->imagem_mobile);
            $anuncio->imagem_mobile = $request->file('imagem_mobile')->store(
                'site/imagens/anuncios/',
                'local'
            );
        }

        if ($request->file("imagem_desktop")) {
            Storage::delete($anuncio->imagem_desktop);
            $anuncio->imagem_desktop = $request->file('imagem_desktop')->store(
                'site/imagens/anuncios/',
                'local'
            );
        }

        $anuncio->save();

        toastr()->success("Anúncio salvo com sucesso!");

        return redirect()->route("painel.anuncios");
    }

    public function deletar(Anuncio $anuncio)
    {
        Storage::delete($anuncio->imagem_desktop);
        Storage::delete($anuncio->imagem_mobile);
        $anuncio->delete();
        return redirect()->back();
    }

    public function consultar(Request $request)
    {
        if ($request->isMethod('get')) {
            $anuncios = Anuncio::all();
            return view("painel.anuncios.consultar", ["anuncios" => $anuncios]);
        } else {
            $filtros = [];
            if ($request->nome != null) {
                $filtros[] = ["nome", "like", "%" . $request->nome . "%"];
            }
            if ($request->url != null) {
                $filtros[] = ["url", "like", "%" . $request->url . "%"];
            }
            $anuncios = Anuncio::where($filtros)->get();
            return view("painel.anuncios.consultar", ["anuncios" => $anuncios, "filtros" => $request->all()]);
        }
        return view("painel.anuncios.consultar");
    }


    public function clicar(Anuncio $anuncio)
    {
        $anuncio->visitas = $anuncio->visitas + 1;
        $anuncio->save();

        return response()->json("clicado");
    }
}
