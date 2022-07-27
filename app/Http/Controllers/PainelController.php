<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\UsuarioSite;
use App\Models\Assinatura;
use App\Models\BlogComentario;
use Carbon\Carbon;

use function PHPUnit\Framework\isNull;

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
        // if($request->data_termino == "mes") {
        //     $data_termino = date('Y/m/d', strtotime("+1 month",strtotime(date('Y/m/d'))));
        //     $vitalicio = false;
        // } else {
        //     $data_termino = "";
        //     $vitalicio = true;
        // }

        $assinatura = new Assinatura;
        $assinatura->usuario_id = session()->get("usuario")["id"];
        $assinatura->usuario_site_id = $usuario_site->id;
        $assinatura->data_termino = Carbon::parse($request->data_termino)->format('Y/m/d');
        $assinatura->save();

        $usuario_site->assinante = 1;
        $usuario_site->save();

        $usuarios = UsuarioSite::all();

        toastr()->success("Assinatura liberada para ".$usuario_site->nome);

        return redirect()->route("painel.usuarios_site", ['usuarios' => $usuarios]);
    }

    public function finalizar_assinatura(Assinatura $assinatura, UsuarioSite $usuario_site)
    {
        $assinatura->status = false;
        $assinatura->save();

        $usuario_site->assinante = 0;
        $usuario_site->save();

        $usuarios = UsuarioSite::all();

        toastr()->success("Assinatura cancelada");

        return redirect()->route("painel.usuarios_site", ['usuarios' => $usuarios]);
    }

    // COMENTARIOS
    public function comentarios_blog() {
        $comentarios = BlogComentario::all();

        return view("painel.comentarios.consultar", ['comentarios' => $comentarios]);
    }

    public function moderar_comentarios_blog(BlogComentario $blogcomentario) {
        
        if($blogcomentario->status == 1) {
            $blogcomentario->status = 0;
        } else {
            $blogcomentario->status = 1;
        }
        $blogcomentario->save();

        toastr()->success("Comentário moderado com sucesso");

        $comentarios = BlogComentario::all();

        return view("painel.comentarios.consultar", ['comentarios' => $comentarios]);
    }
}
