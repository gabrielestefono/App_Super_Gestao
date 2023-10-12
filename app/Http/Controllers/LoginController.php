<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('site.login', ['titulo' => 'Login']);
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
            dd('Usuario existe!');
        }else{
            dd('Usuario não existe!');
        }

    }
}
