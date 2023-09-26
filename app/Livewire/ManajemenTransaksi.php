<?php

namespace App\Livewire;

use App\Models\MasterTransaksi;
use Livewire\Component;

class ManajemenTransaksi extends Component
{

    public $list_transaksi;

    public function mount(){
        $this->list_transaksi = MasterTransaksi::with('masterProduk')->get();
    }

    public function render()
    {
        return view('livewire.manajemen-transaksi');
    }
}
