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
        Schema::table('absens', function (Blueprint $table) {
            $table->dropColumn('updated_at');
            $table->date('tanggal')->nullable()->after('status');
            $table->time('jam')->nullable()->after('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('absens', function (Blueprint $table) {
            $table->dropColumn(['tanggal', 'jam']);
            $table->timestamp('updated_at')->nullable();
        });
    }
};