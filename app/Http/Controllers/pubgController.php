<?php

namespace App\Http\Controllers;

use App\Models\Pubg;
use Illuminate\Http\Request;

class pubgController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pubg = Pubg::all();
        return view('pubg', compact('pubg'));
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
    public function store(Request $done)
    {
        $done->validate([
            'Valorant' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $pubgName = time() . '.' . $done->Pubg->extension();
        $done->Pubg->storeAs('public/img_pubg', $pubgName);

        Pubg::create(['image' => 'img_pubg/' . $pubgName]);

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
