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
        Schema::create('institusi', function (Blueprint $table) {
            $table->id('id_perusahaan');
            $table->string('logo', 255)->nullable();
            $table->string('nama_perusahaan', 255);
            $table->string('alamat_perusahaan', 255);
            $table->string('no_telp_perusahaan', 255);
            $table->enum('jenis', ['Sekolah', 'Perusahaan']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institusi');
    }
};
