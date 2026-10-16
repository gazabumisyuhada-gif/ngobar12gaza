<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('siswas.store') }}">
                    @csrf

                    <div class="mb-4">
                        <x-input-label for="nis" :value="__('NIS')" />
                        <x-text-input id="nis" class="block mt-1 w-full" type="text" name="nis" :value="old('nis')" required />
                        <x-input-error :messages="$errors->get('nis')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="nama" :value="__('Nama Lengkap')" />
                        <x-text-input id="nama" class="block mt-1 w-full" type="text" name="nama" :value="old('nama')" required />
                        <x-input-error :messages="$errors->get('nama')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="kelas" :value="__('Kelas')" />
                        <x-text-input id="kelas" class="block mt-1 w-full" type="text" name="kelas" :value="old('kelas')" required />
                        <x-input-error :messages="$errors->get('kelas')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="rayon" :value="__('Rayon')" />
                        <x-text-input id="rayon" class="block mt-1 w-full" type="text" name="rayon" :value="old('rayon')" required />
                        <x-input-error :messages="$errors->get('rayon')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="no_telepon" :value="__('no_telepon')" />
                        <x-text-input id="no_telepon" class="block mt-1 w-full" type="text" name="no_telepon" :value="old('no_telepon')" required />
                        <x-input-error :messages="$errors->get('no_telepon')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="alamat" :value="__('Alamat')" />
                        <textarea id="alamat" name="alamat" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-md shadow-sm" rows="3" required>{{ old('alamat') }}</textarea>
                        <x-input-error :messages="$errors->get('alamat')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <a href="{{ route('siswas.index') }}" class="text-gray-600 dark:text-gray-400 mr-4">Batal</a>
                        <x-primary-button>Simpan</x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>