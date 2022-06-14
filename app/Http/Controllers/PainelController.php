<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\UsuarioSite;
use App\Models\Assinatura;

class PainelController extends Controller
{

    public function index()
    {
        return view("painel.index");
    }

    public function login()
    {
        return view("painel.login");
    }

    public function logar(Request $request)
    {
        $usuario = Usuario::where("usuario", $request->usuario)->first();
        // if (Hash::check($request->senha, $usuario->senha)) {
        //     echo $usuario->senha;
        //     die();
        // }
        if ($usuario) {
            if (!$usuario->ativo) {
                Log::channel('acessos')->info('LOGIN: O usuario bloqueado ' . $usuario->usuario . ' tentou logar no sistema.');
                toastr()->error("O seu usuário está bloqueado no sistema!");
                return redirect()->route("painel.index");
            }
            if (Hash::check($request->senha, $usuario->senha)) {
                session()->put(["usuario" => $usuario->toArray()]);
                Log::channel('acessos')->info('LOGIN: O usuario ' . $usuario->usuario . ' logou no sistema.');
                return redirect()->route("painel.index");
            } else {
                toastr()->error("Informações de usuário incorretas!");
            }
        } else {
            toastr()->error("Informações de usuário incorretas!");
        }

        return redirect()->back();
    }

    public function sair()
    {
        Log::channel('acessos')->info('LOGIN: O usuario ' . session()->get("usuario")["usuario"] . ' saiu do sistema.');
        session()->forget("usuario");
        return redirect()->route("painel.login");
    }



    // USUARIOS DO SITE
    public function usuarios_site()
    {
        $usuarios = UsuarioSite::all();

        return view("painel.usuarios_site.consultar", ['usuarios' => $usuarios]);
    }

    public function assinatura(UsuarioSite $usuario_site)
    {
        return view("painel.usuarios_site.assinatura", ['usuario_site' => $usuario_site]);
    }

    public function assinar(UsuarioSite $usuario_site, Request $request)
    {
        if($request->data_termino == "mes") {
            $data_termino = date('Y/m/d', strtotime("+1 month",strtotime(date('Y/m/d'))));
            $vitalicio = false;
        } else {
            $data_termino = "";
            $vitalicio = true;
        }

        $assinatura = new Assinatura;
        $assinatura->usuario_id = session()->get("usuario")["id"];
        $assinatura->usuario_site_id = $usuario_site->id;
        $assinatura->data_termino = $data_termino;
        $assinatura->vitalicio = $vitalicio;
        $assinatura->save();

        $usuarios = UsuarioSite::all();

        toastr()->success("Assinatura liberada para ".$usuario_site->nome);

        return redirect()->route("painel.usuarios_site", ['usuarios' => $usuarios]);
    }

    public function finalizar_assinatura(Assinatura $assinatura)
    {
        $assinatura->status = false;
        $assinatura->save();

        $usuarios = UsuarioSite::all();

        toastr()->success("Assinatura cancelada");

        return redirect()->route("painel.usuarios_site", ['usuarios' => $usuarios]);
    }
}
