<?php

namespace App\Http\Controllers;

use App\Models\FreeFire;
use Illuminate\Http\Request;

class freeFireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frees = FreeFire::all();
        return view('ff', compact('frees'));
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
    public function store(Request $check)
    {
        $check->validate([
            'FreeFire' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $freeName = time() . '.' . $check->FreeFire->extension();
        $check->FreeFire->storeAs('public/img_ff', $freeName);

        FreeFire::create(['image' => 'img/' . $freeName]);

        return back()->with('success', 'image upload succsesfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $blade)
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
