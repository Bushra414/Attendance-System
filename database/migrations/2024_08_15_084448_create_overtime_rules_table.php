<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOvertimeRulesTable extends Migration
{
    public function up()
    {
        Schema::create('overtime_rules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained('employees')->onDelete('cascade');
            $table->time('overtime_start_hour');
            $table->float('overtime_rate');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('overtime_rules');
    }
};