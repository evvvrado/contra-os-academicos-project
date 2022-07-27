<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\UsuarioSite;
use Illuminate\Support\Facades\Mail;
use App\Mail\UsuarioSite\Pin;
use App\Mail\UsuarioSite\RecuperarSenha;
use App\Mail\UsuarioSite\PinRecuperar;
use Illuminate\Support\Facades\Storage;

class UsuarioSitesController extends Controller
{
    public function index()
    {
    
        // $usuario_site = UsuarioSite::where("id", 18)->first();
        // session()->put(["usuario_site" => $usuario_site->toArray()]);
        
        return view("minha_area.index");
    }
    
    // ------------------------  BLOCO DE REGISTRO
    public function registro()
    {
        return view("minha_area.registro");
    }

    public function registrar(Request $request){
        $testa_email = UsuarioSite::whereEmail($request->email)->first();

        if($testa_email) {
            toastr()->warning("Você já está cadastrado!");

            return view("minha_area.login");
        } else {
            $usuario_site = new UsuarioSite;
            $usuario_site->nome = $request->nome;
            $usuario_site->email = $request->email;
            $usuario_site->senha = Hash::make($request->senha);
            $usuario_site->pin = rand(1000,9999);
            $usuario_site->hash = sha1(rand(1000,9999)) . sha1(time());
            $usuario_site->save();
    
            Mail::to($request->email)
            ->send(new Pin($usuario_site));
    
            session()->put(["usuario_temporario" => $usuario_site->toArray()]);
    
            return redirect()->route("minha_area.autenticacao");
        }
    }

    public function autenticacao()
    {
        return view("minha_area.autenticacao");
    }

    public function autentica(Request $request)
    {
        $usuario_site = UsuarioSite::where("id", session()->get("usuario_temporario")["id"])->first();

        $pin = $request->pin_1 . $request->pin_2 . $request->pin_3 . $request->pin_4;

        if($pin == $usuario_site->pin) {
            session()->forget("usuario_temporario");

            session()->put(["usuario_site" => $usuario_site->toArray()]);

            toastr()->success("Seja bem-vindo!");

            return redirect()->route("site.index");
        } else {
            toastr()->error("Verifique seu pin!");

            return view("minha_area.autenticacao", ["usuario_site" => $usuario_site]);
        }
    }

    public function verificar_autenticacao() {
        if(session()->get("usuario_temporario")["id"] != "") {
            $verifica = UsuarioSite::whereId(session()->get("usuario_temporario")["id"])
            ->whereVerificado(true)
            ->first();

            if($verifica != "") {
                return 0;
                session()->forget("usuario_temporario");
            } else {
                return 1;
            }
        } else {
            return 0;
        }
    }

    public function verificar_conta(Request $request) {
        $usuario_site = UsuarioSite::whereId($request->id)->first();

        if($usuario_site != null) {
            if($request->hash == $usuario_site->hash) {
                
                session()->put(["usuario_site" => $usuario_site->toArray()]);

                Log::channel('acessos')->info('LOGIN: O usuario ' . $usuario_site->usuario . ' logou no sistema.');
                sleep(2);
                UsuarioSite::where('hash', $request->hash)
                ->update(['verificado' => true]);

                toastr()->success("Sua conta foi verificada com sucesso!");
                
                return redirect()->route("site.index");
            }
        }
        else {

            toastr()->error("Registro não encontrado!");
                
            return redirect()->route("site.index");
        }
    }

    // ------------------------  BLOCO DE AÇÕES DE ACESSO

    public function login()
    {
        // return view("site.em_breve");
        if(!session()->get("usuario_site")) {
            return view("minha_area.login");
        } else {
            toastr()->success("Você está logado!");
            return redirect()->route("site.index");
        }
    }

    public function logar(Request $request)
    {
        $usuario = UsuarioSite::where("email", $request->email)->first();
        // if (Hash::check($request->senha, $usuario->senha)) {
        //     echo $usuario->senha;
        //     die();
        // }
        if ($usuario) {
            if ($usuario->verificado == false) {
                Mail::to($request->email)
                ->send(new PinRecuperar($usuario));

                toastr()->error("Verifique seu email para ativar sua conta!");
                return redirect()->route("site.index");
            } else {
                if (Hash::check($request->senha, $usuario->senha)) {
                    session()->put(["usuario_site" => $usuario->toArray()]);
                    Log::channel('acessos')->info('LOGIN: O usuario ' . $usuario->email . ' logou no sistema.');
                    return redirect()->route("site.index");
                } else {
                    toastr()->error("Informações de usuário incorretas!");
                    return redirect()->route("minha_area.index");
                }
            }
        } else {
            toastr()->error("Informações de usuário incorretas!");
            return redirect()->route("minha_area.index");
        }
    }

    public function sair()
    {
        Log::channel('acessos')->info('LOGIN: O usuario ' . session()->get("usuario_site")["email"] . ' saiu do sistema.');
        session()->forget("usuario_site");
        return redirect()->route("minha_area.login");
    }

    // ---------------------------------------------

    public function perfil()
    {
        $usuario_site = UsuarioSite::whereId(session()->get("usuario_site")["id"])->first();
        return view("minha_area.perfil", ['usuario_site' => $usuario_site]);
    }

    public function perfil_salvar(Request $request, UsuarioSite $usuario_site)
    {
        $request->validate([
            'email' => 'unique:usuario_sites,email,'.$usuario_site->id,
        ]);

        $usuario_site->nome = $request->nome;
        $usuario_site->email = $request->email;
        if($request->senha){
            $usuario_site->senha = Hash::make($request->senha);
        }

        if($request->file("foto")){
            Storage::delete($usuario_site->foto);
            $usuario_site->foto = $request->file('foto')->store(
                'site/imagens/usuarios/'.$usuario_site->id.'/', 'local'
            );
        }

        $usuario_site->uf = $request->uf;
        $usuario_site->cidade = $request->cidade;
        $usuario_site->telefone = $request->telefone;
        $usuario_site->sexo = $request->sexo;
        $usuario_site->nascimento = $request->nascimento;
        $usuario_site->escolaridade = $request->escolaridade;
        $usuario_site->nascimento = date('Y-m-d', strtotime($request->nascimento));
        $usuario_site->save();

        toastr()->success("Cadastro atualizdo com sucesso!");

        return view("minha_area.perfil", ['usuario_site' => $usuario_site]);
    }
}
