<x-crud-layout>
    <form method="POST" action="{{ route('transaksi.store') }}">
        @csrf

        <!-- Jumlah produk -->
        <div>
            <x-input-label for="jumlah_produk" :value="__('Jumlah produk')" />
            <x-text-input id="jumlah_produk" class="block mt-1 w-full" type="number" name="jumlah_produk" :value="old('jumlah_produk')" required autofocus autocomplete="jumlah_produk" />
            <x-input-error :messages="$errors->get('jumlah_produk')" class="mt-2" />
        </div>

        <!-- Tanggal Transaksi -->
        <div class="mt-4">
            <x-input-label for="tanggal_transaksi" :value="__('Tanggal Transaksi')" />
            <x-text-input id="tanggal_transaksi" class="block mt-1 w-full" type="datetime-local" name="tanggal_transaksi" :value="old('tanggal_transaksi', now())" required autocomplete="jumlah_produk" />
            <x-input-error :messages="$errors->get('tanggal_transaksi')" class="mt-2" />
        </div>

        <!-- Id Produk -->
        <div class="mt-4">
            <x-input-label for="id_produk" :value="__('Id Produk')" />
            <select name="id_produk" id="id_produk" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->id }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('id_produk')" class="mt-2" />
        </div>

        <!-- Id User -->
        <div class="mt-4">
            <x-input-label for="id_user" :value="__('Id User')" />
            <select name="id_user" id="id_user" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                @foreach($produks as $produk)
                <option value="{{ $produk->id }}">{{ $produk->id }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('id_user')" class="mt-2" />
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
