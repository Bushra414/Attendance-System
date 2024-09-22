<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->timestamp('clock_in');
            $table->timestamp('clock_out')->nullable();
            $table->date('date');
            $table->float('work_hours')->nullable();
            $table->float('overtime_hours')->nullable();
            $table->enum('status', ['available', 'on lunch', 'on vacation']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance_records');
    }
};
