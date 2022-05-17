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
        Schema::create('order_produk', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');

            $table->foreign('order_id')->references('id')->on('pesanan')->onDelete('cascade');

            $table->integer('jumlah');
            $table->integer('rincian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_produk');
    }
};
