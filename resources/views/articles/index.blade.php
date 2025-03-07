<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel Saya') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <a href="{{ route('articles.create') }}" 
               class="px-4 py-2 bg-green-500 text-black rounded-md hover:bg-green-600">
                Buat Artikel Baru
            </a>

            @foreach ($articles as $article)
                <div class="p-4 bg-white shadow sm:rounded-lg">
                    <h3 class="text-lg font-semibold">{{ $article->judul }}</h3> {{-- Perbaiki dari $article->title ke $article->judul --}}
                    <div class="mt-2">
                        <a href="{{ route('articles.edit', $article->id) }}" 
                        class="px-2 py-1 bg-blue-500 text-black rounded-md hover:bg-blue-600">
                            Edit
                        </a>

                        <form action="{{ route('articles.destroy', $article->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-2 py-1 bg-red-500 text-black rounded-md hover:bg-red-600"
                                    onclick="return confirm('Yakin ingin menghapus artikel ini?')">
                                Hapus
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</x-app-layout>
