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
        Schema::create('formula_detalles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('formula_id');
            $table->string('cantidad');
            $table->unsignedBigInteger('medicamento');
            $table->string('hora');
            $table->timestamps();

            $table->foreign('medicamento')->references('id')->on('medicamentos');
            $table->foreign('formula_id')->references('id')->on('formulas')->onDelete("cascade");

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
