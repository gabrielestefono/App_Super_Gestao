<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Fornecedor;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "fornecedor100";
        $fornecedor->site = "fornecedor100.com.br";
        $fornecedor->uf = "ce";
        $fornecedor->email = "fornecedor100@contato.com.br";
        $fornecedor->save();


        // Utilizando o método create
        Fornecedor::create([
            "nome"=>"Fornecedor 200",
            "site"=>"fornecedor200.com.br",
            "uf"=>"RS",
            "email"=>"contato@fornecedor200.com.br"
        ]);

        // Insert 
        DB::table('fornecedores')->insert([
            "nome"=>"Fornecedor 300",
            "site"=>"fornecedor300.com.br",
            "uf"=>"SP",
            "email"=>"contato@fornecedor300.com.br"
        ]);
    }
}
