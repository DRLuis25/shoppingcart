<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('foto');
            $table->integer('stock');
            $table->double('precio');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('categoria_id', 'producto_has_categoria_ibfk_1')->references('id')->on('categoria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
