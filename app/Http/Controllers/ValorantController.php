<?php

namespace App\Http\Controllers;
use App\Models\Valorant;
use Illuminate\Http\Request;

class ValorantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $valo = Valorant::all();
        return view('valorant', compact('valo'));
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
    public function store(Request $rain)
    {
        $rain->validate([
            'Valorant' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $valoName = time() . '.' . $rain->Valorant->extension();
        $rain->mlbb->storeAs('public/img_valo', $valoName);

        Valorant::create(['image' => 'img_valo/' . $valoName]);

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
