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
        Schema::create('transaksi_pivots', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'kode_transaksi');
            $table->string('kd_barang');
            $table->string('nama_barang');
            $table->integer('qty');
            $table->string('sts_inouts');
            $table->timestamps();
            $table->foreign('kd_barang')->references('kd_barang')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('kode_transaksi')->references('kode_transaksi')->on('transactions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pivots');
    }
};
