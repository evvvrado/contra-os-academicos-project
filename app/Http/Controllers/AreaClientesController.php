<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Cliente;

use App\Models\Orcamento;
use App\Models\OrcamentoServico;
use App\Models\Servico;

class AreaClientesController extends Controller
{
    // Cliente

    public function clienteArea()
    {
        // $orcamentos = Orcamento::where('cliente_id', session()->get("cliente")["id"])->get();
        // $Cliente = Cliente::where('id', session()->get("cliente")["id"])->first();
        if (!session()->get("primeiro_login")) {
            return redirect()->route("minha-area.cliente-pedidos");
        } else {
            return view("site.area-do-cliente.nova_senha");
        }
    }

    public function clienteAreaPedidos()
    {
        $cliente = Cliente::find(session()->get("cliente")["id"]);
        $orcamentos = $cliente->orcamentos->where("finalizado", true);
        return view("site.area-do-cliente.pedidos", ["orcamentos" => $orcamentos, 'cliente' => $cliente]);
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
        $usuario = Cliente::find(session()->get("cliente")["id"]);
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
        $usuario = Cliente::find(session()->get("cliente")["id"]);
        if ($request->senha_antiga == $usuario->senha) {
            $usuario->senha = $request->senha_nova;
            $usuario->save();
            session()->flash("sucesso", "Senha atualizada com sucesso!");
            toastr()->success("Senha alterada com sucesso!");
        } else {
            session()->flash("erro", "A senha antiga informada está incorreta");
            toastr()->error("A senha antiga informada não está correta!");
        }
        return redirect()->back();
    }

    public function clienteAreaDadosSenhaNovaSalvar(Request $request)
    {
        $usuario = Cliente::find(session()->get("Cliente")["id"]);
        $usuario->senha = $request->senha;
        $usuario->save();

        session()->put(["cliente" => $usuario->toArray()]);

        return redirect()->route("minha-area.cliente");
    }

    // public function clienteAreaDadosSenhaAlterar(Request $request)
    // {
    //     $usuario = Cliente::find(session()->get("cliente")["id"]);
    //     if (Hash::check($request->senha_antiga, $usuario->senha)) {
    //         $usuario->senha = Hash::make($request->senha_nova);
    //         $usuario->save();
    //         session()->flash("sucesso", "Senha atualizada com sucesso!");
    //         toastr()->success("Senha alterada com sucesso!");
    //     } else {
    //         session()->flash("erro", "A senha antiga informada está incorreta");
    //         toastr()->error("A senha antiga informada não está correta!");
    //     }
    //     return redirect()->back();
    // }

    public function clienteAreaDadosAvatarAlterar(Request $request)
    {
        if ($request->file("avatar")) {
            $usuario = Cliente::find(session()->get("cliente")["id"]);
            Storage::delete($usuario->avatar);
            $usuario->avatar = $request->file('avatar')->store(
                'site/imagens/avatares/' . $usuario->id,
                'local'
            );
            $usuario->save();
        }

        return redirect()->back();
    }

    public function clienteOrcamentos(Orcamento $orcamento)
    {
        $cliente = $orcamento->cliente;
        $orcamento_servicos_inclusos = OrcamentoServico::where("orcamento_id", $orcamento->id)->whereHas("servico", function ($q) {
            $q->where("servicos.incluso", true);
        })->get();
        $orcamento_servicos_nao_inclusos =  OrcamentoServico::where("orcamento_id", $orcamento->id)->whereHas("servico", function ($q) {
            $q->where("servicos.incluso", false);
        })->get();

        return view("site.area-do-cliente.orcamentos", ["orcamento" => $orcamento, "cliente" => $cliente, "orcamento_servicos_inclusos" => $orcamento_servicos_inclusos, "orcamento_servicos_nao_inclusos" => $orcamento_servicos_nao_inclusos]);
    }

    public function deslogar()
    {
        session()->forget("cliente");
        return redirect()->route("minha-area.cliente");
    }
}
