<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Nama pelanggan
            $table->string('email'); // Email pelanggan
            $table->string('no_whatsapp'); // Nomor WhatsApp pelanggan
            $table->string('metode_pembayaran'); // Metode pembayaran yang dipilih
            $table->string('bukti_transaksi')->nullable(); // Bukti transaksi (opsional)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
