<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    public function index()
    {
        $partners = Partner::all();
        return view('partner.index', compact('partners'));
    }

    public function create()
    {
        return view('partner.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Simpan postingan ke dalam database
        $partner = new Partner;       
        // Upload gambar
        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imageName = time() . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('partner'), $imageName); // Sesuaikan dengan direktori penyimpanan gambar Anda
            $partner->image_path = $imageName;
        }

        $partner->save();

        return redirect()->route('admin.partner.index')->with('success', 'Partner berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $partner = Partner::find($id);
        return view('admin.partners.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::find($id);

        $request->validate([
            'image_path' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image_path')) {
            Storage::disk('public')->delete($partner->image_path);

            $imagePath = $request->file('image_path')->store('partners', 'public');
            $partner->image_path = $imagePath;
        }

        $partner->save();

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $partner = Partner::find($id);
        Storage::disk('public')->delete($partner->image_path);
        $partner->delete();

        return redirect()->route('admin.partners.index')->with('success', 'Partner berhasil dihapus.');
    }
}
