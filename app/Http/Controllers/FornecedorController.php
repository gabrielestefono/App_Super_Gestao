<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0=>["nome" => "Fornecedor 1", "status" => "N", 'cnpj' => '00.000.000/000-00', 'ddd'=>'11', 'telefone'=>'0000-0000'],
            1=>["nome" => "Fornecedor 2", "status" => "S", 'cnpj' => null, 'ddd'=>'85', 'telefone'=>'0000-0000'],
            2=>["nome" => "Fornecedor 3", "status" => "S", 'cnpj' => null, 'ddd'=>'32', 'telefone'=>'0000-0000'],
        ];
        return view("app.fornecedor.index", compact("fornecedores"));
    }


    public function listar(){
        return view('app.fornecedor.listar');
    }

    public function adicionar(Request $request){
        if($request->input('_token') != ""){
            //
            echo 'Cadastro';
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];


            $feedback = [
                'required' => 'O campo é obrigatório',
                'nome.min' => 'O campo nome precisa ter no mínimo 3 caracteres',
                'nome.max' => 'O campo nome precisa ter no máximo 40 caracteres',
                'nome.unique' => 'O nome informado já está em uso',
                'uf.min' => 'O campo deve ter 2 caracteres',
                'uf.max' => 'O campo deve ter 2 caracteres',
                'email.email' => 'O email informado não é válido'
            ];

            $request->validate($regras, $feedback);

            echo 'Chegamos até aqui';
        }
        return view('app.fornecedor.adicionar');
    }
}
