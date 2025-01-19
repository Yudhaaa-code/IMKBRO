<?php

namespace App\Http\Controllers;

use App\Models\mlbb;
use Illuminate\Http\Request;

class mlbbController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ml = mlbb::all();
        return view('mlbb', compact('ml'));
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
    public function store(Request $glass)
    {
        $glass->validate([
            'mlbb' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $mlName = time() . '.' . $glass->mlbb->extension();
        $glass->mlbb->storeAs('public/img_mlbb', $mlName);

        mlbb::create(['image' => 'img_mlbb/' . $mlName]);

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
