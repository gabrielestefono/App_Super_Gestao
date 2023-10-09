<?php

namespace App\Http\Controllers;

use App\Models\motivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato(Request $request){
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivoContato = $request->input('motivoContato');
        // $contato->mensagem = $request->input('mensagem');
        // $contato->save();

        // $contato = new SiteContato();
        // $contato->fill($request->all());
        // $contato->save();

        // $contato = new SiteContato();
        // $contato->create($request->all());
        $motivo_contato = motivoContato::all();
        return view('site.contato', ['titulo'=>'Contato', "motivo_contato" => $motivo_contato]);
    }

    public function salvar(Request $request){
        // Validar o recebimento dos dados recebidos no request
            $regras = [
                "nome"=>"required|min:3|max:40", /*|unique:site_contatos*/
                "telefone"=>"required",
                "email" => "email",
                "motivo_contatos_id" => "required",
                "mensagem" => "required|max:2000"
            ];

            $feedback = [
                "nome.min" => "O campo 'nome' precisa ter um tamanho mínimo de 3 caracteres!",
                "nome.max" => "O campo 'nome' deve ter no máximo 40 caracteres!",
                "nome.unique" => "O nome deve ser único!",
                "email.email" => "O email informado não é válido!",
                "required" => "O campo ':attribute' deve ser preenchido!",
                "mensagem.max" => "A mensagem deve ter no máximo 2000 caracteres!"
            ];

            $request->validate($regras,$feedback);

        SiteContato::create($request->all());
        return redirect()->route('site.index');
    }
}
