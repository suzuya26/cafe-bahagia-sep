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
        Schema::create('master_produk', function (Blueprint $table) {
            $table->integer('kode_produk')->primary();
            $table->string('nama_produk');
            $table->date('expired_date');
            $table->integer('harga_satuan');
            $table->string('ukuran');
            $table->string('kategori');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_products');
    }
};
