<div>
    <div class="flex justify-center p-5">
        <div class="flex-auto relative overflow-x-auto shadow-md rounded-lg">
            <table class="w-full">
                <thead class="bg-slate-600 text-white">
                    <tr>
                        <th class="p-2">
                            Tanggal Pemesanan
                        </th>
                        <th class="p-2">
                            Nomor Pemesanan
                        </th>
                        <th class="p-2">
                            Nama Pelanggan
                        </th>
                        <th class="p-2">
                            Nama Produk
                        </th>
                        <th class="p-2">
                            Jumlah
                        </th>
                        <th class="p-2">
                            Harga Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_transaksi as $lt)
                        <tr class="text-center">
                            <td class="px-3 py-2">
                                {{ $lt->tanggal_pemesanan }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $lt->nomor_pemesanan }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $lt->nama_pelanggan }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $lt->masterProduk->nama_produk }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $lt->jumlah }}
                            </td>
                            <td class="px-3 py-2">
                                {{ $lt->harga_total }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
