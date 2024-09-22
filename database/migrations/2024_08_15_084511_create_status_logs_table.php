<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusLogsTable extends Migration
{
    public function up()
    {
        Schema::create('status_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->foreignId('status_id')->constrained('status')->onDelete('cascade'); // Added foreign key for status
            $table->timestamp('start_time');
            $table->timestamp('end_time')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('status_logs');
    }
};
