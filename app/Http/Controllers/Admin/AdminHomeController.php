<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $homes = Home::all();
        return view('admin.home.index', compact('homes'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        Home::create($request->only('title', 'content'));
        return redirect()->route('admin.home.index')->with('success', 'Home created successfully!');
    }

    public function show(Home $home)
    {
        return view('admin.home.show', compact('home'));
    }

    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);

        $home->update($request->only('title', 'content'));
        return redirect()->route('admin.home.index')->with('success', 'Home updated successfully!');
    }

    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('admin.home.index')->with('success', 'Home deleted successfully!');
    }
}
