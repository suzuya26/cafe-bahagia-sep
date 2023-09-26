<div>
    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4 p-5 md:px-10 md:py-3">
        @foreach ($fresh_products as $index => $fp)
            <div class="max-w-sm rounded-lg overflow-hidden shadow-lg" key="{{ $index }}">
                {{-- <img class="w-full" src="https://source.unsplash.com/random/400x300?sig=1" /> --}}
                <div class="px-3 py-2">
                    <div class="font-bold text-xl mb-2"> {{ $fp->nama_produk }}</div>
                </div>
                <div class="px-3 pt-2 pb-1">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">${{ $fp->harga_satuan }}</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">Size
                        {{ $fp->ukuran }}</span>
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{ $fp->kategori }}</span>
                </div>
                @if ($choosen_product == $fp->kode_produk)
                    <div class="px-3 pt-2 pb-1">
                        <div class="px-3 pt-2 pb-1">
                            <button
                                class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-orange-500 hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-400">
                                <span class="px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke="none"
                                        width="24" height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M12.324 7.021l.154.345c.237-.041.52-.055.847-.025l.133.577c-.257-.032-.53-.062-.771-.012l-.092.023c-.464.123-.316.565.098.672.682.158 1.494.208 1.815.922.258.578-.041.973-.541 1.163l.154.346-.325.068-.147-.329c-.338.061-.725.053-1.08-.041l-.1-.584c.294.046.658.087.938.03l.186-.06c.333-.165.231-.582-.264-.681-.367-.083-1.342-.021-1.705-.831-.205-.458-.053-.936.535-1.154l-.161-.361.326-.068m3.82 1.614c-.706-1.648-2.681-2.751-4.409-2.463-1.728.288-2.557 1.857-1.85 3.506.746 1.739 2.888 2.853 4.651 2.414 1.562-.388 2.28-1.887 1.608-3.457zm4.05-5.635l3.766 8.233c-5.433 4.223-12.654-.038-17.951 4.461l-3.766-8.233c4.944-4.779 11.773-.45 17.951-4.461zm3.806 12.014c-6.857 3.939-12.399-1.424-19.5 5.986l-4.5-9.964 1.402-1.462 3.807 8.401-.002.008c7.445-5.592 11.195-1.175 18.109-4.561.294.647.565 1.33.684 1.592z" />
                                    </svg>
                                </span>
                                Processed...
                            </button>
                        </div>
                    </div>
                @else
                    <div class="px-3 pt-2 pb-1">
                        <div class="px-3 pt-2 pb-1">
                            <button wire:click="chooseProduct({{ $fp->kode_produk }},{{ $index }})"
                                class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                <span class="px-2">
                                    <svg width="24" height="24" fill="currentColor" stroke="none"
                                        xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd">
                                        <path
                                            d="M14.209 22c.09 1.185-.293 1.99-2.468 2-4.083.019-4.441 0-8.524 0-2.207 0-2.521-.793-2.435-2h13.427zm6.791 2h-5.717c.423-.691.541-1.665.38-2.365l.004-.004c1.098-1.187 1.089-2.974.107-4.142.513-1.464-.89-5.941-6.443-6.844l-.331-2.645h14l-2 16zm-7.291-3c-.006 0-12.482-.002-12.506-.006-.674-.068-1.203-.711-1.203-1.494 0-.782.529-1.426 1.203-1.494.024-.004 1.318-.008 1.318-.008 2.088.018 2.227 1.639 3.256 1.633 1.028-.006 1.298-1.607 3.223-1.631h4.709c.715.019 1.291.684 1.291 1.5 0 .817-.576 1.482-1.291 1.5zm.647-4h-13.734c0-2.493 2.636-5 6.878-5s6.856 2.507 6.856 5zm9.644-10h-16v-1.382c.87 0 2-.697 2-1.618h6.185l2.072-4 1.359.634-1.776 3.366h4.199c0 .922 1.092 1.618 1.961 1.618v1.382z" />
                                    </svg>
                                </span>
                                Order Sekarang
                            </button>
                        </div>
                    </div>
                @endif
            </div>
        @endforeach
    </div>
    <div class="p-5 md:px-10 md:py-3">
        @if ($order_state == true)
            <h6 class="text-xl font-semibold">
                Form Order {{ $fresh_products[$choosen_index]->nama_produk }}
            </h6>
            <form>
                <div class="my-3">
                    <label for="tanggal_order" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                        Pesanan</label>
                    <input wire:model="tanggal_order" type="date" id="tanggal_order"
                        class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed"
                        disabled>
                </div>
                <div class="my-3">
                    <label for="no_pesanan" class="block mb-2 text-sm font-medium text-gray-900">Nomor Pemesanan</label>
                    <input wire:model="no_pesanan" type="number" id="no_pesanan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="my-3">
                    <label for="nama_pelanggan" class="block mb-2 text-sm font-medium text-gray-900">Nama
                        Pelanggan</label>
                    <input wire:model="nama_pelanggan" type="text" id="nama_pelanggan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
                <div class="my-3">
                    <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
                    <input wire:model="jumlah" type="number" id="jumlah"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </form>
            @if ($procced_order_state == false)
                <div class="flex justify-center md:justify-start">
                    <button wire:click="proccedOrder({{ $fresh_products[$choosen_index]->harga_satuan }})"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Order
                    </button>
                </div>
            @else
                <h6 class="text-xl font-semibold my-2">
                    Harga Total Sebanyak : $ {{ $harga_total }},
                    <br />
                    Lanjutkan Proses Pemesanan?
                </h6>
                <button wire:click="storeOrder()"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Lanjut
                </button>
            @endif
        @endif
    </div>
    @if ($succes_order == true)
    <div class="p-5 md:px-10 md:py-3">
        <div id="alert-1" class="flex items-center p-4 mb-4 text-blue-800 rounded-lg bg-blue-50" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
              <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ml-3 text-sm font-medium">
             Berhasil Melakukan pemesanan Produk
            </div>
              <button wire:click="dismisAlert()" type="button" class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-500 rounded-lg focus:ring-2 focus:ring-blue-400 p-1.5 hover:bg-blue-200 inline-flex items-center justify-center h-8 w-8 " data-dismiss-target="#alert-1" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                </svg>
            </button>
          </div>
    </div>
    @endif
</div>
