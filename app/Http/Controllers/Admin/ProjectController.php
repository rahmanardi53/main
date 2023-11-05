<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;


class ProjectController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();
        return view('project.index', compact('projects'));
    }
    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Simpan postingan ke dalam database
        $project = new project;       
        $project->title = $request->title;
        $project->category = $request->category;
        $project->description = $request->description;
        // Upload gambar
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('project'), $imageName); // Sesuaikan dengan direktori penyimpanan gambar Anda
            $project->image = $imageName;
        }

        $project->save();

        return redirect()->route('admin.project.index')->with('success', 'project berhasil ditambahkan.');
    }
}
