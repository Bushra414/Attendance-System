<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->binary('fingerprint_data')->nullable();
            $table->foreignId('positions_id')->constrained('positions'); // Foreign key constraint
            $table->foreignId('status_id')->constrained('status'); // Foreign key referencing the status table
            $table->foreignId('shift_id')->constrained('shift_assignments'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
};