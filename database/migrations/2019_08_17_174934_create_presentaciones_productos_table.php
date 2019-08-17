<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentacionesProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentaciones_productos', function (Blueprint $table) {
            $table->bigIncrements('id_presentacion_producto')->nullable(false)->change();
            $table->string('descripcion')->nullable(false)->change();
            $table->primary('id_presentacion_producto');


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
        Schema::dropIfExists('presentaciones_productos');
    }
}
