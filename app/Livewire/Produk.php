<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\MasterProduk;
use App\Models\MasterTransaksi;
use Carbon\Carbon;

class Produk extends Component
{
    public $fresh_products;
    public $choosen_product;
    public $choosen_index;
    public $order_state = false;
    public $procced_order_state = false;
    public $succes_order = false;

    //isian form
    public $tanggal_order,$no_pesanan,$nama_pelanggan,$kode_produk,$jumlah,$harga_total;

    public function mount(){
        $this->fresh_products = MasterProduk::whereDate('expired_date','>',Carbon::today())->get();
    }

    public function render()
    {
        return view('livewire.produk');
    }

    public function chooseProduct($prod,$index){
        $this->choosen_product = $prod;
        $this->choosen_index = $index;
        $this->tanggal_order = now()->toDateString();
        $this->kode_produk= $prod;
        $this->order_state = true;
    }

    public function proccedOrder($hs){
        $this->harga_total = $hs*$this->jumlah;
        $this->procced_order_state = true;
    }

    public function storeOrder(){
        MasterTransaksi::create([
            'nomor_pemesanan'   => $this->no_pesanan,
            'tanggal_pemesanan' => $this->tanggal_order,
            'nama_pelanggan'    => $this->nama_pelanggan,
            'kode_produk'       => $this->kode_produk,
            'jumlah'            => $this->jumlah,
            'harga_total'       => $this->harga_total
        ]);
        $this->reset(['no_pesanan','tanggal_order','nama_pelanggan','kode_produk','jumlah','harga_total']);
        $this->order_state = false;
        $this->choosen_index = null;
        $this->choosen_product = null;
        $this->procced_order_state = false;
        $this->succes_order = true;
    }

    public function dismisAlert(){
        $this->succes_order = false;
    }
}
