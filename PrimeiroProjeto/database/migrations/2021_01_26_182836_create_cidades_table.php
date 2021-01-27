<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidades', function (Blueprint $table) {
            $table->id();//Cria uma chave primária chamada id PADRÃO
            $table->string('name', 100)->unique();//Não necessáriamente precisa de ter o tamnho, pq já foi pré definido lá nas varieáveis de banco de dados os tamanhos
            $table->timestamps(); //PADRÃO//Já vem com o larável para mostrar as alterações feitas no banco de dados
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cidades');
    }
}
