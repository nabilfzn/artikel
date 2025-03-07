<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Buat Artikel Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <form action="{{ route('articles.store') }}" method="POST">
                @csrf
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" class="mt-1 p-2 w-full border rounded-lg" required>
                </div>

                <div class="mt-4">
                    <label class="block text-sm font-medium text-gray-700">Isi Artikel</label>
                    <textarea name="konten" class="mt-1 p-2 w-full border rounded-lg" required></textarea>
                </div>

                <div class="mt-4">
                    <button type="submit" class="px-4 py-2 bg-green-500 text-black rounded-md hover:bg-green-600">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
