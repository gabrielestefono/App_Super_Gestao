<?php

namespace Database\Seeders;

use App\Models\motivoContato;
use Illuminate\Database\Seeder;

class MotivoContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        motivoContato::create(["motivo_contatos"=>"Dúvida"]);
        motivoContato::create(["motivo_contatos"=>"Elogio"]);
        motivoContato::create(["motivo_contatos"=>"Reclamação"]);
    }
}
