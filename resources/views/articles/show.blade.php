<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $article->judul }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 bg-white p-6 rounded-lg shadow">
            <h3 class="text-2xl font-bold">{{ $article->judul }}</h3>
            <p class="text-gray-600 mt-2">Ditulis oleh: {{ $article->user->name }}</p>
            <p class="mt-4 text-lg">{{ $article->konten }}</p>

            <a href="{{ route('dashboard') }}" 
               class="mt-4 inline-block px-4 py-2 bg-gray-500 text-white rounded-md hover:bg-gray-600">
                Kembali ke Dashboard
            </a>
        </div>
    </div>
</x-app-layout>
