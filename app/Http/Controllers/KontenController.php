<?php

namespace App\Http\Controllers;

use App\Models\Konten;
use Illuminate\Http\Request;

class KontenController extends Controller
{
    // Menampilkan daftar konten (READ)
    public function index()
    {
        $konten = Konten::all();
        return view('konten.index', compact('konten'));
    }

    // Menampilkan form untuk membuat konten baru (CREATE)
    public function create()
    {
        return view('konten.create');
    }

    // Menyimpan konten baru ke database (STORE)
    public function store(Request $request)
    {
        $request->validate([
            'konten' => 'required',
        ]);

        Konten::create($request->all());

        return redirect()->route('konten.index')
                         ->with('success', 'Konten berhasil ditambahkan.');
    }

    // Menampilkan konten berdasarkan id (READ)
    public function show(Konten $konten)
    {
        return view('konten.show', compact('konten'));
    }

    // Menampilkan form untuk edit konten (UPDATE)
    public function edit(Konten $konten)
    {
        return view('konten.edit', compact('konten'));
    }

    // Menyimpan perubahan konten ke database (UPDATE)
    public function update(Request $request, Konten $konten)
    {
        $request->validate([
            'konten' => 'required',
        ]);

        $konten->update($request->all());

        return redirect()->route('konten.index')
                         ->with('success', 'Konten berhasil diperbarui.');
    }

    // Menghapus konten dari database (DELETE)
    public function destroy(Konten $konten)
    {
        $konten->delete();

        return redirect()->route('konten.index')
                         ->with('success', 'Konten berhasil dihapus.');
    }
}
