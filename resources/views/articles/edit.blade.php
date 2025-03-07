<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Artikel
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 bg-white shadow sm:rounded-lg">
                @if (session('status'))
                    <div class="mb-4 text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <form action="{{ route('articles.update', $article->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Judul:</label>
                        <input type="text" name="judul" value="{{ old('judul', $article->judul) }}" required 
                               class="w-full px-3 py-2 border rounded-lg @error('judul') border-red-500 @enderror">

                        @error('judul')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Konten:</label>
                        <textarea name="konten" required 
                                  class="w-full px-3 py-2 border rounded-lg @error('konten') border-red-500 @enderror">{{ old('konten', $article->konten) }}</textarea>

                        @error('konten')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit" class="px-4 py-2 bg-blue-500 text-black rounded-md hover:bg-blue-600">
                            Simpan Perubahan
                        </button>
                        <a href="{{ route('articles.index') }}" class="ml-2 px-4 py-2 bg-gray-500 text-black rounded-md hover:bg-gray-600">
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
