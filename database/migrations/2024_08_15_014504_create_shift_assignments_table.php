<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiftAssignmentsTable extends Migration
{
    public function up()
    {
        Schema::create('shift_assignments', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // e.g., "Day Shift"
            $table->time('start_time'); // e.g., 08:00
            $table->time('end_time');   // e.g., 16:00
            $table->string('days_of_week'); // e.g., "Sunday,Monday,Tuesday,Wednesday,Thursday"
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('shift_assignments');
    }
};



