<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tienda_producto', function (Blueprint $table) {
            $table->unsignedBigInteger('tienda_id');
            $table->unsignedBigInteger('producto_id');

            $table->foreign('tienda_id')->references('id')->on('tiendas');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tienda_producto');
    }
};
