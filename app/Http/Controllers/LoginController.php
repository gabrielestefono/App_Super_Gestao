<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(Request $request){

        $erro = '';

        if($request->get('erro') == 1){
            $erro = 'O usuário e/ou senha não existe.';
        }else if($request->get('erro') == 2){
            $erro = 'Falha na verificação do usuário.';
        }

        return view('site.login', ['titulo' => 'Login', 'error' => $erro]);
    }

    public function autenticar(Request $request){
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        // As mensagens de feedback de validação

        $feedback = [
            'email' => "O campo usuário (e-mail) é obrigatório!",
            'senha' => "O campo de senha é obrigatório"
        ];

        $request->validate($regras, $feedback);

        $email = $request->get('usuario');
        $password = $request->get('senha');

        // Iniciar model user;

        $user = new User();

        $usuario = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($usuario->name)){
            session_start();
            $_SESSION['nome'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;

            return redirect()->route('app.clientes');
        }else{
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
}
