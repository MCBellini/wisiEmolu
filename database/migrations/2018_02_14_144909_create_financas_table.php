<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('dataInicial');
            $table->string('dataFinal');
            $table->date('data');
            $table->string('concelho');
            $table->string('freguesia');
            $table->string('entidade');
            $table->string('nome');
            $table->string('morada');
            $table->string('descricao')->nullable();
            $table->integer('user_id')-> unsigned();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('financas');
    }
}
