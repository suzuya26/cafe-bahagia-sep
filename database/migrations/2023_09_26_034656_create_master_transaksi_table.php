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
        Schema::create('master_transaksi', function (Blueprint $table) {
            $table->integer('nomor_pemesanan')->primary();
            $table->date('tanggal_pemesanan');
            $table->string('nama_pelanggan');
            $table->integer('kode_produk')->nullable();
            $table->foreign('kode_produk')->references('kode_produk')->on('master_produk');
            $table->integer('jumlah');
            $table->integer('harga_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_transaksi');
    }
};
