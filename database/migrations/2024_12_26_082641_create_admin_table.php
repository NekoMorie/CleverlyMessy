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
        Schema::create('admin', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('google_id', 255)->nullable();
            $table->unsignedBigInteger('id_perusahaan');
            $table->foreign('id_perusahaan')->references('id_perusahaan')->on('institusi')->cascadeOnDelete();
            $table->string('nama', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->string('foto', 255)->nullable();
            $table->enum('role', ['admin', 'customer']);
            $table->string('phone_number', 255)->nullable();
            $table->string('google_photo', 255)->nullable();
            $table->string('no_telp', 255)->nullable();
            $table->enum('status', ['aktif', 'non-aktif']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
