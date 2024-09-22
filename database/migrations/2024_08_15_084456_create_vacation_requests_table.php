<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacationRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('vacation_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['pending', 'approved', 'declined'])->default('pending');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('vacation_requests');
    }
};
