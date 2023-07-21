<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public function principal(){
        $titulo = 'Home';
        $motivoContato = [
            "1" => "Dúvida",
            "2" => "Elogio",
            "3" => "Reclamação"
        ];
        return view('site.principal', ["titulo" => $titulo, "motivoContato" => $motivoContato]);
    }
}