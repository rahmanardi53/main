<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Partner;
use App\Models\Project;



class WebController extends Controller
{
    public function index()
    {
        $blogs = Blog::limit(3)->get(); // Mengambil semua data blog dari model Blog
        $partners = Partner::all();
        $projects = Project::all();
        return view('welcome', compact('partners', 'blogs','projects')); // Menampilkan tampilan blog dengan data blogs
    }

}
