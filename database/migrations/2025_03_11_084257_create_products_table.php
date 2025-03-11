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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('restrict');
            $table->string('kd_barang', 10)->unique(); // Perbaikan tipe data dan tambahkan unique
            $table->string('name');
            $table->text('description')->nullable(); // Perbaikan agar nullable
            $table->decimal('price', 10, 2); // Perbaikan ukuran harga agar lebih fleksibel
            $table->dateTime('tgl_rilis');
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
        Schema::dropIfExists('products');
    }
};
