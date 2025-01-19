<?php

namespace App\Http\Controllers;

use App\Models\Coc;
use Illuminate\Http\Request;

class cocController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocs = Coc::all();
        return view('coc', compact('cocs'));
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
    public function store(Request $byone)
    {
        $byone->validate([
            'Coc' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $cocName = time() . '.' . $byone->Coc->extension();
        $byone->Coc->storeAs('public/img_coc', $cocName);

        Coc::create(['image' => 'img_coc/' . $cocName]);

        return back()->with('success', 'image upload succsesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
