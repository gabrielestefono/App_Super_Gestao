<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        $fornecedores = [
            0=>["nome" => "Fornecedor 1", "status" => "N", 'cnpj' => '00.000.000/000-00'],
            1=>["nome" => "Fornecedor 2", "status" => "S"],
        ];
        /*
        condicao ? valorSim : valorNao;
        */
        $msg = isset($fornecedores[1]["cnpj"]) ? "CNPJ Informado" : "CNPJ não informado";
        echo $msg;
        return view("app.fornecedor.index", compact("fornecedores"));
    }
}
