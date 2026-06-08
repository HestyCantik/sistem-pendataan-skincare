<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Produk_Skincare', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('merek');
            $table->string('jenis_produk');
            $table->integer('harga');
            $table->integer('stok');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Produk_Skincare');
    }
};