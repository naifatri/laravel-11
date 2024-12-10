<?php

namespace App\Http\Controllers;

use App\Models\Certificates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificatesController extends Controller
{
    // Menampilkan daftar semua sertifikat
    public function index()
    {
        $certificates = Certificates::all();
        return view('admin.certificates.index', compact('certificates'));
    }

    // Menampilkan form untuk membuat sertifikat baru
    public function create()
    {
        return view('admin.certificates.create');
    }

    // Menyimpan sertifikat baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'nullable|string|max:500',
            'file' => 'required|file|mimes:pdf,jpg,jpeg,png|max:2048', // Maksimal ukuran file 2MB
        ]);

        // Simpan file ke storage
        $filePath = $request->file('file')->store('certificates', 'public');

        // Buat data sertifikat
        Certificates::create([
            'name' => $request->name,
            'issued_by' => $request->issued_by,
            'issued_at' => $request->issued_at,
            'description' => $request->description,
            'file_path' => $filePath,
        ]);

        return redirect()->route('certificates.index')->with('success', 'Certificate created successfully.');
    }

    // Menampilkan detail sertifikat
    public function show(Certificates $certificate)
    {
        return view('admin.certificates.show', compact('certificate'));
    }

    // Menampilkan form edit sertifikat
    public function edit(Certificates $certificate)
    {
        return view('admin.certificates.edit', compact('certificate'));
    }

    // Mengupdate sertifikat
    public function update(Request $request, Certificates $certificate)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'description' => 'nullable|string|max:500',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048',
        ]);

        // Periksa jika file baru diunggah
        if ($request->hasFile('file')) {
            // Hapus file lama jika ada
            if ($certificate->file_path && Storage::disk('public')->exists($certificate->file_path)) {
                Storage::disk('public')->delete($certificate->file_path);
            }

            // Simpan file baru
            $filePath = $request->file('file')->store('certificates', 'public');
            $certificate->file_path = $filePath;
        }

        // Update data sertifikat
        $certificate->update([
            'name' => $request->name,
            'issued_by' => $request->issued_by,
            'issued_at' => $request->issued_at,
            'description' => $request->description,
            'file_path' => $certificate->file_path,
        ]);

        return redirect()->route('certificates.index')->with('success', 'Certificate updated successfully.');
    }

    // Menghapus sertifikat
    public function destroy(Certificates $certificate)
    {
        // Hapus file jika ada
        if ($certificate->file_path && Storage::disk('public')->exists($certificate->file_path)) {
            Storage::disk('public')->delete($certificate->file_path);
        }

        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', 'Certificate deleted successfully.');
    }
}
