<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Konten;
use App\Models\Certificates;
use App\Models\Contacts;
use App\Models\About;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data dari masing-masing model
        $skills = Skill::all();
        $projects = Project::all();
        $kontens = Konten::all();
        $certificates = Certificates::all();
        $about = About::all();
        $contacts = Contacts::all();
  
        // Kirim data ke view
        return view('home', compact('skills', 'projects', 'kontens', 'certificates', 'contacts','about'));
    }
}
