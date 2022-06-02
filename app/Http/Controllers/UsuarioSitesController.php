<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\UsuarioSite;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnviarEmailUsuarioSite;

class UsuarioSitesController extends Controller
{
    public function index()
    {
        return view("minha_area.index");
    }

    public function login()
    {
        return view("minha_area.login");
    }

    public function registro()
    {
        return view("minha_area.registro");
    }

    public function registrar(Request $request){
        $request->validate([
            'email' => 'unique:usuarios,email',
        ]);

        $usuario_site = new UsuarioSite;
        $usuario_site->nome = $request->nome;
        $usuario_site->email = $request->email;
        $usuario_site->senha = Hash::make($request->senha);

        Mail::to('joao.pedrolopes10@hotmail.com')
        ->send(new EnviarEmailUsuarioSite());
        
        $usuario_site->save();

        session()->put(["usuario_site" => $usuario_site->toArray()]);

        return redirect()->route("minha_area.autenticacao");
    }

    public function autenticacao()
    {
        return view("minha_area.autenticacao");
    }

    public function autentica()
    {
        return redirect()->route("site.index");
    }

    public function logar(Request $request)
    {
        $usuario = UsuarioSite::where("email", $request->email)->first();
        // if (Hash::check($request->senha, $usuario->senha)) {
        //     echo $usuario->senha;
        //     die();
        // }
        if ($usuario) {
            if (Hash::check($request->senha, $usuario->senha)) {
                session()->put(["usuario_site" => $usuario->toArray()]);
                Log::channel('acessos')->info('LOGIN: O usuario ' . $usuario->email . ' logou no sistema.');
                return redirect()->route("minha_areaindex");
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
        Log::channel('acessos')->info('LOGIN: O usuario ' . session()->get("usuario_site")["email"] . ' saiu do sistema.');
        session()->forget("usuario_site");
        return redirect()->route("minha_area.login");
    }
}
