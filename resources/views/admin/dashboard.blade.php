<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="relative bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-4">
                <h1 class="text-xl font-bold text-center">Data User</h1>
                <a href="{{ route('user.create')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Tambah user</a>
                @if($users->count() > 0)
                <div class="overflow-x-auto overflow-hidden">
                    <table class="mt-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Updated At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->nama_user }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->role }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->updated_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('user.edit',$user->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="{{ route('user.delete',$user->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h1>Data Kosong</h1>
                @endif
            </div>
            <div class="mt-5 relative bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-4">
                <h1 class="text-xl font-bold text-center">Data Produk</h1>
                <a href="{{ route('produk.create')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Tambah Produk</a>
                @if($produks->count() > 0)
                <div class="overflow-x-auto overflow-hidden">
                    <table class="mt-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Merek Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Harga Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Updated At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($produks as $produk)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $produk->nama_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $produk->merk_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $produk->harga_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $produk->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $produk->updated_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('produk.edit',$produk->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="{{ route('produk.delete',$produk->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h1>Data Kosong</h1>
                @endif
            </div>
            <div class="mt-5 relative bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg p-4">
                <h1 class="text-xl font-bold text-center">Data Transaksi</h1>
                <a href="{{ route('transaksi.create')}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Tambah Transaksi</a>
                @if($transaksis->count() > 0)
                <div class="overflow-x-auto overflow-hidden">
                    <table class="mt-5 w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Jumlah Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Tanggak Transaksi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id Produk
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Id User
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Updated At
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transaksis as $transaksi)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $transaksi->jumlah_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaksi->tanggal_transaksi }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaksi->id_produk }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaksi->id_user }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaksi->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transaksi->updated_at }}
                                </td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('transaksi.edit',$transaksi->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    <a href="{{ route('transaksi.delete',$transaksi->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                <h1>Data Kosong</h1>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
