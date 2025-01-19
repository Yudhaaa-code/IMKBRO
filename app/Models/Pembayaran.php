<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'no_whatsapp',
        'metode_pembayaran',
        'bukti_transaksi',
    ];
}
