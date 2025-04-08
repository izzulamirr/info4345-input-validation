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
        Schema::table('todos', function (Blueprint $table) {
            $table->text('description')->nullable(); // Add the description column
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending'); // Add the status column
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todos', function (Blueprint $table) {
            $table->dropColumn('description'); // Remove the description column
            $table->dropColumn('status'); // Remove the status column
        });
    }
};
