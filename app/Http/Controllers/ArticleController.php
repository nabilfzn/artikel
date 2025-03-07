<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function dashboard()
    {
    $articles = Artikel::all(); // Menampilkan semua artikel
    return view('dashboard', compact('articles'));
    }


    public function index()
    {
        $articles = Artikel::where('user_id', Auth::id())->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
    $article = Artikel::findOrFail($id);
    return view('articles.show', compact('article'));
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        Artikel::create([
            'user_id' => Auth::id(),
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->route('articles.index')->with('status', 'Artikel berhasil dibuat!');
    }

    public function edit(Artikel $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Artikel $article)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
        ]);

        $article->update([
            'judul' => $request->judul,
            'konten' => $request->konten,
        ]);

        return redirect()->route('articles.index')->with('status', 'Artikel berhasil diperbarui!');
    }

    public function destroy(Artikel $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('status', 'Artikel berhasil dihapus!');
    }
}

