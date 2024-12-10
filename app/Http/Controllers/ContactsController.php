<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        // Menampilkan daftar contact dengan paginasi
        $contacts = Contacts::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        // Menampilkan form create contact
        return view('admin.contacts.create');
    }

    public function store(Request $request)
    {
        // Validasi inputan dari form create
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        // Menyimpan data ke database
        Contacts::create($request->all());
        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact created successfully.');
    }

    public function show($id)
    {
        // Mengambil data berdasarkan ID
        $contact = Contacts::findOrFail($id);

        // Menampilkan detail contact
        return view('admin.contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        // Mengambil data berdasarkan ID untuk diedit
        $contact = Contacts::findOrFail($id);

        // Menampilkan form edit contact
        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
{
    // Validasi inputan dari form edit
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);

    // Mengambil data contact berdasarkan ID
    $contact = Contacts::findOrFail($id);

    // Memperbarui data contact
    $contact->update($request->all());

    // Redirect to the correct route
    return redirect()->route('admin.dashboard.contacts.index')
        ->with('success', 'Contact updated successfully.');
}

public function destroy($id)
{
    // Menghapus data contact berdasarkan ID
    $contact = Contacts::findOrFail($id);
    $contact->delete();

    // Redirect to the correct route
    return redirect()->route('admin.dashboard.contacts.index')
        ->with('success', 'Contact deleted successfully.');
}

}
