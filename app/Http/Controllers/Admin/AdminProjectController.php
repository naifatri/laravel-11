<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminProjectController extends Controller
{
    // Fungsi untuk menampilkan daftar project dengan paginasi
    public function index()
    {
        // Menggunakan paginasi untuk mengambil 10 proyek per halaman
        $projects = Project::paginate(10);  // Menggunakan paginate untuk mendukung paginasi

        // Mengirim data proyek ke view
        return view('admin.project.index', compact('projects'));
    }

    // Fungsi untuk menampilkan halaman form tambah project
    public function create()
    {
        return view('admin.project.create');
    }

    // Fungsi untuk menyimpan project baru ke database
    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'tanggal' => 'nullable|date'
        ]);

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('projects', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Menyimpan project baru ke database
        Project::create($validatedData);

        // Redirect kembali ke halaman daftar project dengan pesan sukses
        return redirect()->route('admin.project.index')
            ->with('success', 'Project berhasil ditambahkan');
    }

        public function show($id)
    {
        // Mengambil data project berdasarkan ID
        $project = Project::findOrFail($id);

        // Mengembalikan view detail project
        return view('admin.project.show', compact('project'));
    }


    // Fungsi untuk menampilkan halaman form edit project
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    // Fungsi untuk memperbarui data project yang ada
    public function update(Request $request, Project $project)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'link' => 'nullable|url',
            'tanggal' => 'nullable|date'
        ]);

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            // Menyimpan gambar baru
            $imagePath = $request->file('image')->store('project', 'public');
            $validatedData['image'] = $imagePath;
        }

        // Memperbarui data project
        $project->update($validatedData);

        // Redirect kembali ke halaman daftar project dengan pesan sukses
        return redirect()->route('admin.project.index')
            ->with('success', 'Project berhasil diperbarui');
    }

    // Fungsi untuk menghapus project
    public function destroy(Project $project)
    {
        // Menghapus gambar project jika ada
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        // Menghapus project dari database
        $project->delete();

        // Redirect kembali ke halaman daftar project dengan pesan sukses
        return redirect()->route('admin.project.index')
            ->with('success', 'Project berhasil dihapus');
    }
}
