<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = "fornecedor100";
        $fornecedor->site = "fornecedor100.com.br";
        $fornecedor->uf = "ce";
        $fornecedor->email = "fornecedor100@contato.com.br";
        $fornecedor->save();
    }
}
