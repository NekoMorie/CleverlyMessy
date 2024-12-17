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
        Schema::table('users', function (Blueprint $table) {
            // Ensure the column exists or create it
            $table->unsignedBigInteger('waktus_id')->nullable()->after('classnames_id');

            // Add the foreign key constraint
            $table->foreign('waktus_id')->references('id')->on('waktus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['waktus_id']); // Drop the foreign key
            $table->dropColumn('waktus_id'); // Drop the column
        });
    }
};
