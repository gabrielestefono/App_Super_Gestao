<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AjusteProdutosFiliais extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabela produtos filiais
        Schema::create('filiais', function (Blueprint $table){
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });

        // Tabela produto_filiais
        Schema::create('produto_filiais', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('filial_id');
            $table->unsignedBigInteger('produto_id');
            $table->decimal('preco_venda', 8, 2);
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();

            $table->foreign('filial_id')->references('id')->on('filiais');
            $table->foreign('produto_id')->references('id')->on('produtos');
        });

        // Removendo tabela produtos
        Schema::table('produtos', function (Blueprint $table){
            $table->dropColumn(['preco_venda', 'estoque_minimo', 'estoque_maximo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // adicionando tabela produtos
        Schema::create('produtos', function (Blueprint $table){
            $table->decimal('preco_venda', 8,2);
            $table->decimal('estoque_minimo', 8,2);
            $table->decimal('estoque_maximo', 8,2);
        });

        Schema::dropIfExists('produtos_filiais');
        Schema::dropIfExists('filiais');
    }
}
