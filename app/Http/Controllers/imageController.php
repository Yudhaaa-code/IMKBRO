<?php

namespace App\Http\Controllers;

use App\Models\ImgProd;
use Illuminate\Http\Request;

class imageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $images = ImgProd::all();
        return view('home', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ImgProd' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $imageName = time() . '.' . $request->ImgProd->extension();
        $request->ImgProd->storeAs('public/img', $imageName);

        ImgProd::create(['image_prod' => 'img/' . $imageName]);

        return back()->with('success', 'image upload succsesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Ambil data berdasarkan ID
    $imgProd = ImgProd::find($id);

    // Jika data tidak ditemukan, tampilkan error 404
    if (!$imgProd) {
        abort(404, 'Data not found');
    }

    // Pastikan file Blade tujuan ada
    $bladeName = $imgProd->blade_name;
    if (!view()->exists($bladeName)) {
        abort(404, "Blade file '{$bladeName}' not found");
    }

    // Kirim data ke file Blade tujuan
    return view($bladeName, ['imgProd' => $imgProd]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
