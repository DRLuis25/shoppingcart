<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('venta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente_id');
            $table->string('ccname');
            $table->string('ccnumber');
            $table->string('cc');
            $table->string('direccion');
            $table->double('subtotal');
            $table->double('envio')->nullable();
            $table->double('otros')->nullable();
            $table->double('total');
            $table->char('estado',1)->default('0');//0:abierta,1:cerrada,2:cancelada
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('cliente_id', 'venta_has_cliente_ibfk_1')->references('id')->on('users');
        });
        Schema::create('venta_detalle', function (Blueprint $table) {
            $table->unsignedBigInteger('venta_id');
            $table->unsignedBigInteger('product_id');
            $table->double('precio');
            $table->double('cantidad');
            $table->double('subtotal');
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['venta_id','product_id']);
            $table->foreign('venta_id', 'venta_detalle_has_id_ibfk_1')->references('id')->on('venta');
            $table->foreign('product_id', 'venta_detalle_has_producto_ibfk_2')->references('id')->on('product');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventas');
    }
}
