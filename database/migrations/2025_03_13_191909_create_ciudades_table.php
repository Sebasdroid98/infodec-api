<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiudadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciudades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 30);
            $table->string('codigo_clima', 30);

            $table->unsignedBigInteger('pais_id');
            $table->foreign('pais_id')
                ->references('id')
                ->on('paises')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // $table->foreignId('pais_id')->constrained('paises')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('ciudades');
    }
}
