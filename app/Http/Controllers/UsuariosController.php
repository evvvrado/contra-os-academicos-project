<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UsuariosController extends Controller
{
    //
    public function consultar(){
        $usuarios = Usuario::all();
        return view("painel.usuarios.consultar", ["usuarios" => $usuarios]);
    }

    public function consultar_inativos(){
        $usuarios = Usuario::where("ativo", false)->get();
        return view("painel.usuarios.consultar", ["usuarios" => $usuarios, "tipo" => "Inativos"]);
    }

    public function consultar_ativos(){
        $usuarios = Usuario::where("ativo", true)->get();
        return view("painel.usuarios.consultar", ["usuarios" => $usuarios, "tipo" => "Ativos"]);
    }

    public function cadastro(){
        return view("painel.usuarios.cadastro");
    }

    public function cadastrar(Request $request){
        $request->validate([
            'email' => 'unique:usuarios,email',
            'usuario' => 'unique:usuarios,usuario',
        ]);

        $usuario = new Usuario;
        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->acesso = $request->acesso;
        $usuario->usuario = $request->usuario;
        $usuario->telefone = $request->telefone;
        $usuario->senha = Hash::make($request->senha);

        if($request->file("foto")){
            $usuario->foto = $request->file('foto')->store(
                'site/imagens/usuarios/', 'local'
            );
        }
        
        $usuario->save();

        toastr()->success("Cadastro realizado com sucesso!");
        return redirect()->route("painel.usuarios");
    }

    public function editar(Usuario $usuario){
        return view("painel.usuarios.edicao", ["usuario" => $usuario]);
    }

    public function salvar(Request $request, Usuario $usuario){
        $request->validate([
            'email' => 'unique:usuarios,email,'.$usuario->id,
            'usuario' => 'unique:usuarios,usuario,'.$usuario->id,
        ]);

        $usuario->nome = $request->nome;
        $usuario->email = $request->email;
        $usuario->acesso = $request->acesso;
        $usuario->telefone = $request->telefone;
        $usuario->usuario = $request->usuario;
        if($request->senha){
            $usuario->senha = Hash::make($request->senha);
        }

        if($request->file("foto")){
            Storage::delete($usuario->foto);
            $usuario->foto = $request->file('foto')->store(
                'site/imagens/usuarios/', 'local'
            );
        }

        $usuario->save();

        toastr()->success("Cadastro atualizdo com sucesso!");
        return redirect()->route('painel.usuarios');
    }

    public function bloqueio(Usuario $usuario){
        if($usuario->ativo){
            $usuario->ativo = false;
            toastr()->success("Usuário bloqueado.");
        }else{
            $usuario->ativo = true;
            toastr()->success("Usuário ativado.");
        }
        $usuario->save();
        return redirect()->back();
    }

}
