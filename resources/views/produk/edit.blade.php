<x-crud-layout>
    <form method="POST" action="{{ route('produk.update') }}">
        @csrf

        <!-- Nama Produk -->
        <div>
            <x-input-label for="nama_produk" :value="__('Nama Produk')" />
            <x-text-input id="nama_produk" class="block mt-1 w-full" type="text" name="nama_produk" :value="old('nama_produk', $produk->nama_produk)" required autocomplete="nama_produk" />
            <x-input-error :messages="$errors->get('nama_produk')" class="mt-2" />
        </div>

        <!-- Merk Produk -->
        <div class="mt-4">
            <x-input-label for="merk_produk" :value="__('Merk Produk')" />
            <x-text-input id="merk_produk" class="block mt-1 w-full" type="text" name="merk_produk" :value="old('merk_produk', $produk->merk_produk)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('merk_produk')" class="mt-2" />
        </div>

        <!-- Harga Produk -->
        <div class="mt-4">
            <x-input-label for="harga_produk" :value="__('Harga Produk')" />
            <x-text-input id="harga_produk" class="block mt-1 w-full" type="number" name="harga_produk" :value="old('harga_produk', $produk->harga_produk)" required autocomplete="username" />
            <x-input-error :messages="$errors->get('harga_produk')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <button class="ms-4 inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150" onclick="location.href='{{route('admin.dashboard')}}'" type="button">
                {{ __('Cancel') }}
            </button>

            <x-primary-button class="ms-4">
                {{ __('Create') }}
            </x-primary-button>
        </div>
    </form>
</x-crud-layout>
