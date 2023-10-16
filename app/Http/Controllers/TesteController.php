<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TesteController extends Controller
{
    public function teste(){
        $email = 'gabrielestefono@hotmail.com';
        $senha = 'eunaosei';
        $nome = 'Gabriel Estéfono';

        $user = new \App\Models\User();
        $user->name =$nome;
        $user->email = $email;
        $user->password = $senha;
        $user->save();

    }
}
