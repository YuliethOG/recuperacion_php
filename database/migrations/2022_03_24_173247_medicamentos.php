<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Código')->unique();
            $table->string('Nombre');
            $table->bigInteger('Categorías')->unsigned();
            $table->boolean('estado')->nullable()->default(1);

            $table->timestamps();

            $table->foreign('Categorías')->references('id')->on('categorias');

        });
   
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
