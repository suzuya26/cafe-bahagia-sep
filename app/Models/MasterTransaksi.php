<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTransaksi extends Model
{
    use HasFactory;
    protected $table = 'master_transaksi';
    protected $guarded = [];

    public function masterProduk(){
        return $this->belongsTo(MasterProduk::class,'kode_produk', 'kode_produk');
    }
}
