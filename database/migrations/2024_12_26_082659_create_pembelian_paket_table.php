<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pembelian_paket', function (Blueprint $table) {
            $table->id('id_beli');
            $table->unsignedBigInteger('id_admin');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->cascadeOnDelete();
            $table->foreignId('id_paket')->constrained('paket')->cascadeOnDelete();
            $table->date('tanggal_pembelian');
            $table->enum('status', ['berhasil', 'pending', 'gagal', 'habis']);
            $table->date('tanggal_kadaluarsa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelian_paket');
    }
};
