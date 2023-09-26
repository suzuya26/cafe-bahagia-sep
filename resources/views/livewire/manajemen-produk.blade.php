<div>
    {{-- tabel master produk --}}
    <div class="flex justify-center p-5">
        <div class="flex-auto relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full">
                <thead class="bg-slate-600 text-white">
                    <tr>
                        <th class="p-2">
                            Kode Produk
                        </th>
                        <th class="p-2">
                            Nama Produk
                        </th>
                        <th class="p-2">
                            Expired Date
                        </th>
                        <th class="p-2">
                            Harga Satuan
                        </th>
                        <th class="p-2">
                            Ukuran
                        </th>
                        <th class="p-2">
                            Kategori
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($managed_products as $mp)
                        <tr class="text-center">
                            <td class="px-3 py-2">
                                {{ $mp->kode_produk }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $mp->nama_produk }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $mp->expired_date }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $mp->harga_satuan }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $mp->ukuran }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $mp->kategori }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @if ($form_state == false)
        {{-- tombol state tambah produk --}}
        <div class="flex justify-center md:justify-start px-5">
            <button
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                wire:click="formProduk()">
                Tambah Produk
            </button>
        </div>
    @else
        {{-- form tambah produk --}}
        <div class="p-5">
            <h6 class="text-xl font-semibold">
                Tambah Produk Baru
            </h6>
            <form>
                <div class="my-3">
                    <label for="kode-produk" class="block mb-2 text-sm font-medium text-gray-900">Kode Produk</label>
                    <input wire:model="kode_produk" type="number" id="kode-produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="my-3">
                    <label for="nama-produk" class="block mb-2 text-sm font-medium text-gray-900">Nama Produk</label>
                    <input wire:model="nama_produk" type="text" id="nama-produk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="my-3">
                    <label for="expired-date" class="block mb-2 text-sm font-medium text-gray-900">Expired Date</label>
                    <input wire:model="expired_date" type="date" id="expired-date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="my-3">
                    <label for="harga-satuan" class="block mb-2 text-sm font-medium text-gray-900">Harga Satuan</label>
                    <input wire:model="harga_satuan" type="number" id="harga-satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="my-3">
                    <label for="ukuran" class="block mb-2 text-sm font-medium text-gray-900">Ukuran</label>
                    <input wire:model="ukuran" type="text" id="ukuran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
                <div class="my-3">
                    <label for="ketegori" class="block mb-2 text-sm font-medium text-gray-900">Kategori</label>
                    <input wire:model="kategori" type="text" id="kategori" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                </div>
            </form>
            <div class="flex justify-center md:justify-start">
                <button
                    wire:click="storeProduk()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Submit
                </button>
            </div>
        </div>
    @endif
</div>
