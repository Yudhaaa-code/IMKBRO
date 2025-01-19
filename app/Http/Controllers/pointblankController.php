<?php

namespace App\Http\Controllers;

use App\Models\PointBlank;
use Illuminate\Http\Request;

class pointblankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $points = PointBlank::all();
        return view('pb', compact('points'));
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
    public function store(Request $fasle)
    {
        $fasle->validate([
            'PointBlank' => 'required|image|mimes:png,jpg,jpeg,gif|max:2048',
        ]);

        $pbName = time() . '.' . $fasle->PointBlank->extension();
        $fasle->PointBlank->storeAs('public/img_pb', $pbName);

        PointBlank::create(['image' => 'img_pb/' . $pbName]);

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
