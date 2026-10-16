<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900 dark:text-gray-100">
                
                @if (session('success'))
                    <div class="mb-4 bg-green-500 text-white p-3 rounded-md">
                        {{ session('success') }}
                    </div>
                @endif

                <a href="{{ route('siswas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                    + Tambah Siswa
                </a>

                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700 mt-4">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left">NIS</th>
                            <th class="px-6 py-3 text-left">Nama</th>
                            <th class="px-6 py-3 text-left">Kelas</th>
                            <th class="px-6 py-3 text-left">Rayon</th>
                            <th class="px-6 py-3 text-left">No. no_telepon</th>
                            <th class="px-6 py-3 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                        @forelse ($siswas as $siswa)
                            <tr>
                                <td class="px-6 py-4">{{ $siswa->nis }}</td>
                                <td class="px-6 py-4">{{ $siswa->nama }}</td>
                                <td class="px-6 py-4">{{ $siswa->kelas }}</td>
                                <td class="px-6 py-4">{{ $siswa->rayon }}</td>
                                <td class="px-6 py-4">{{ $siswa->no_telepon }}</td>
                                <td class="px-6 py-4 flex space-x-2">
                                    <a href="{{ route('siswas.edit', $siswa->id) }}" class="text-yellow-500 hover:underline">Edit</a>
                                    <form action="{{ route('siswas.destroy', $siswa->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center">Belum ada data siswa.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>

                <div class="mt-4">
                    {{ $siswas->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>