<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial', function (Blueprint $table) {
            $table->id();
            $table->decimal('presupuesto_original', 10, 2);
            $table->decimal('presupuesto_convertido', 10, 2);
            $table->string('tasa_cambio', 15);
            $table->string('clima', 15);
            $table->string('temperatura', 5);

            $table->unsignedBigInteger('ciudad_id')->nullable();
            $table->foreign('ciudad_id')
                ->references('id')
                ->on('ciudades')
                ->onDelete('set null')
                ->onUpdate('set null');

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
        Schema::dropIfExists('historial');
    }
}
