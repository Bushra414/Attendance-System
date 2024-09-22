<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Added missing import for DB

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique(); // Unique name for each status
            $table->timestamps();
        });

        // Insert default statuses
        DB::table('status')->insert([
            ['name' => 'on-site'],
            ['name' => 'on-vacation'],
            ['name' => 'absent'],
            ['name' => 'sick'],
            ['name' => 'terminated'],
            ['name' => 'on-over-time'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};
