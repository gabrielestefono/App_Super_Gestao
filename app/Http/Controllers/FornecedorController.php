<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
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


    public function listar(Request $request){
        $fornecedores = Fornecedor::where('nome', 'like', '%'.$request->input('nome').'%')
        ->where('site', 'like', '%'.$request->input('site').'%')
        ->where('uf', 'like', '%'.$request->input('uf').'%')
        ->where('email', 'like', '%'.$request->input('email').'%')
        ->paginate(2);

        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request){
        $msg = '';

        if($request->input('_token') && $request->input('id') == ''){

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

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());

            $msg = "Cadastro finalizado com sucesso!";

        }

        if($request->input('_token') && $request->input('id') != ""){
            $fornecedor = Fornecedor::find($request->input('id'));
            $update = $fornecedor->update($request->all());

            if($update){
                $msg = "Update realizado com sucesso!";
            }else{
                $msg = "Update apresentou problema!";
            }

            return redirect()->route('app.fornecedor.editar', ["id" => $request->input('id'), 'msg' => $msg]);
        }


        return view('app.fornecedor.adicionar', ["msg" => $msg]);
    }

    public function editar($id, $msg = ''){
        $fornecedor = Fornecedor::find($id);
        return view('app.fornecedor.adicionar', ['fornecedor' => $fornecedor, 'msg' => $msg]);
    }
}
