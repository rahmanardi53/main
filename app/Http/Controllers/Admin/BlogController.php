<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); // Mengambil semua data blog dari model Blog
        return view('blog.index', ['blogs' => $blogs]); // Menampilkan tampilan blog dengan data blogs
    }

    public function create()
    {
        return view('blog.create'); // Ganti 'blog.tambah' dengan nama view yang sesuai
    }

    public function store(Request $request)
    {
        // Validasi input dari form
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan kebutuhan Anda
        ]);

        // Simpan postingan ke dalam database
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->category = $request->category;

        // Upload gambar
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('img'), $imageName); // Sesuaikan dengan direktori penyimpanan gambar Anda
            $blog->img = $imageName;
        }

        $blog->save();

        return redirect()->route('admin.blog.index'); // Sesuaikan dengan rute yang sesuai
    }
    public function edit(){

    }
}
