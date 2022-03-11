<?php

namespace App\Http\Controllers;

use View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use App\Models\Lead;

use App\Models\Orcamento;
use App\Models\Servico;

class AreaClientesController extends Controller
{
    // Cliente

    public function clienteArea()
    {
        $orcamentos = Orcamento::where('lead_id', session()->get("cliente")["id"])->get();
        $lead = Lead::where('id', session()->get("cliente")["id"])->first();

        if(session()->get("primeiro_login") != "Sim") {
            return redirect()->route("minha-area.cliente-pedidos");
        } else {
            return view("site.area-do-cliente.nova_senha");
        }
    }

    public function clienteAreaPedidos()
    {
        $orcamentos = Orcamento::where('lead_id', session()->get("cliente")["id"])->get();
        $lead = Lead::where('id', session()->get("cliente")["id"])->first();

        return view("site.area-do-cliente.pedidos", ["orcamentos" => $orcamentos, 'lead' => $lead]);
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
        $usuario = Lead::find(session()->get("cliente")["id"]);
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
        $usuario = Lead::find(session()->get("cliente")["id"]);
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
        $usuario = Lead::find(session()->get("cliente")["id"]);
        $usuario->senha = $request->senha;
        $usuario->save();
        
        session()->put(["primeiro_login" => 'Não']);
        return redirect()->route("minha-area.cliente");
    }

    // public function clienteAreaDadosSenhaAlterar(Request $request)
    // {
    //     $usuario = Lead::find(session()->get("cliente")["id"]);
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
            $usuario = Lead::find(session()->get("cliente")["id"]);
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
        $lead_info = $orcamento->lead;
        $servicos_sim = Servico::where('incluso', true)
        ->join('orcamento_servicos', 'servico_id', 'servicos.id')
        ->where('orcamento_id', $orcamento->id)
        ->get();

        $servicos_nao = Servico::where('incluso', false)
        ->join('orcamento_servicos', 'servico_id', 'servicos.id')
        ->where('orcamento_id', $orcamento->id)
        ->get();

        // dd($orcamento->produtos);

        return view("site.area-do-cliente.orcamentos", ["orcamento" => $orcamento, "lead_info" => $lead_info, "servicos_sim" => $servicos_sim, "servicos_nao" => $servicos_nao]);
    }

    public function deslogar()
    {
        session()->forget("cliente");
        return redirect()->route("minha-area.cliente");
    }
}
