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
   // Modify the ENUM values using raw SQL
   DB::statement("ALTER TABLE todos MODIFY COLUMN status ENUM('pending', 'completed', 'rejected') DEFAULT 'pending'");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('todos', function (Blueprint $table) {
  // Revert the ENUM values to the original state
  DB::statement("ALTER TABLE todos MODIFY COLUMN status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending'");        });
    }
};
