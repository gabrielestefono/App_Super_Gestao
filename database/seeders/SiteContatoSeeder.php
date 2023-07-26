<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contato = new SiteContato();
        $contato->nome = "Sistema SG";
        $contato->telefone = "(45) 9-9999-1111";
        $contato->email = "contato@sg.com.br";
        $contato->motivoContato = "1";
        $contato->mensagem = "Seja bem-vindo ao sistema Super Gestão!";
        $contato->save();
    }
}
