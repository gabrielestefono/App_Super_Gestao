<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\motivoContato;

class PrincipalController extends Controller
{
    public function principal(){
        $titulo = 'Home';
        $motivo_contato = motivoContato::all();
        return view('site.principal', ["titulo" => $titulo, "motivo_contato" => $motivo_contato]);
    }
}
