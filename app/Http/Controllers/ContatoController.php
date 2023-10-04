<?php

namespace App\Http\Controllers;

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
        $motivoContato = [
            "1" => "Dúvida",
            "2" => "Elogio",
            "3" => "Reclamação"
        ];
        return view('site.contato', ['titulo'=>'Contato', "motivoContato" => $motivoContato]);
    }

    public function salvar(Request $request){
        // Validar o recebimento dos dados recebidos no request
            $request->validate([
                "nome"=>"required|min:3|max:40", // Mínimo de 3 caracteres e máximo de 40
                "telefone"=>"required",
                "email" => "required",
                "motivoContato" => "required",
                "mensagem" => "required|max:2000"
            ]);



        // SiteContato::create($request->all());
    }
}
