<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function create()
    {
        return view('pembayaran.create'); // Form transaksi
    }

    public function store(Request $flow)
    {
        // Validasi input
        $validated = $flow->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'no_whatsapp' => 'required|string|max:20',
            'metode_pembayaran' => 'required|string',
            'bukti_transaksi' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);
    
        // Simpan file bukti transaksi
        if ($flow->hasFile('bukti_transaksi')) {
            $path = $flow->file('bukti_transaksi')->store('bukti-transaksi', 'public');
            $validated['bukti_transaksi'] = $path;
        }
    
        // Simpan ke database
        Pembayaran::create($validated);
    
        // Set flash message
        return redirect()->route('create')->with('success', 'Transaksi berhasil disimpan!');
    
    }

}
