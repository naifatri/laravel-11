<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();
        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Simpan data ke database
        Skill::create($request->all());

        // Set pesan flash untuk notifikasi
        return redirect()->route('skill.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        return view('admin.skill.show', compact('skill'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        // Validasi input
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Update data ke database
        $skill->update($request->all());

        // Set pesan flash untuk notifikasi
        return redirect()->route('skill.index')->with('success', 'Data berhasil diedit.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        // Hapus data
        $skill->delete();

        // Set pesan flash untuk notifikasi
        return redirect()->route('skill.index')->with('success', 'Data berhasil dihapus.');
    }
}
