<?php

namespace App\Livewire;

use App\Models\MasterProduk;
use Livewire\Component;

class ManajemenProduk extends Component
{
    public $managed_products;
    public $form_state = false;

    //isian form
    public $kode_produk, $nama_produk, $expired_date, $harga_satuan, $ukuran, $kategori;

    public function mount()
    {
        $this->managed_products = MasterProduk::all();
    }

    public function render()
    {
        return view('livewire.manajemen-produk');
    }

    public function formProduk()
    {
        $this->form_state = true;
    }

    public function storeProduk()
    {
        MasterProduk::create([
            'kode_produk'   => $this->kode_produk,
            'nama_produk'   => $this->nama_produk,
            'expired_date'  => $this->expired_date,
            'harga_satuan'  => $this->harga_satuan,
            'ukuran'        => $this->ukuran,
            'kategori'      => $this->kategori
        ]);

        $this->reset(['kode_produk', 'nama_produk', 'expired_date', 'harga_satuan', 'ukuran', 'kategori']);
        $this->managed_products = MasterProduk::all();
    }
}
