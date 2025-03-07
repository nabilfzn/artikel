<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <h3 class="text-lg font-bold">Semua Artikel</h3>

            @foreach ($articles as $article)
                <div class="p-4 bg-white shadow sm:rounded-lg">
                    <h3 class="text-lg font-semibold">{{ $article->judul }}</h3>
                    <p class="text-gray-600">Ditulis oleh: {{ $article->user->name }}</p>
                    <div class="mt-2 space-x-2">
                        <a href="{{ route('articles.show', $article->id) }}" 
                           class="px-3 py-1 bg-green-500 text-black rounded-md hover:bg-green-600">
                            Lihat Detail
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
