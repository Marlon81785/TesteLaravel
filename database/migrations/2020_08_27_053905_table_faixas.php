<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableFaixas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faixas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->time('duracao');
            $table->string('albun');
            $table->integer('ordem');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faixas');
    }
}
