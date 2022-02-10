<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Lead;

class AreaClientesController extends Controller
{
    // Cliente

    public function clienteArea()
    {
        return view("site.area-do-cliente.main");
    }

    public function clienteAreaPedidos()
    {
        return view("site.area-do-cliente.pedidos");
    }
    public function clienteAreaPedidosDetalhes()
    {
        return view("site.area-do-cliente.compra");
    }


    public function clienteAreaMatriculas()
    {
        return view("site.area-do-cliente.matriculas");
    }

    public function clienteAreaMatriculasDetalhes()
    {
        return view("site.area-do-cliente.detalhes");
    }

    public function clienteAreaDados()
    {
        return view("site.area-do-cliente.dados");
    }

    public function clienteAreaDadosSalvar(Request $request)
    {
        $usuario = Lead::find(session()->get("lead")["id"]);
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->cpf = $request->cpf;
        $usuario->telefone = $request->telefone;
        $usuario->rua = $request->rua;
        $usuario->cidade = $request->cidade;
        $usuario->estado = $request->estado;
        $usuario->pais = $request->pais;
        $usuario->save();
        return redirect()->back();
    }

    public function clienteAreaDadosSenhaAlterar(Request $request)
    {
        $usuario = Lead::find(session()->get("lead")["id"]);
        if (Hash::check($request->senha_antiga, $usuario->senha)) {
            $usuario->senha = Hash::make($request->senha_nova);
            $usuario->save();
            session()->flash("sucesso", "Senha atualizada com sucesso!");
            toastr()->success("Senha alterada com sucesso!");
        } else {
            session()->flash("erro", "A senha antiga informada está incorreta");
            toastr()->error("A senha antiga informada não está correta!");
        }
        return redirect()->back();
    }

    public function clienteAreaDadosAvatarAlterar(Request $request)
    {
        if ($request->file("avatar")) {
            $usuario = Lead::find(session()->get("lead")["id"]);
            Storage::delete($usuario->avatar);
            $usuario->avatar = $request->file('avatar')->store(
                'site/imagens/avatares/' . $usuario->id,
                'local'
            );
            $usuario->save();
        }

        return redirect()->back();
    }
}
