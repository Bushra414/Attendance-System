<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHrUsersTable extends Migration
{
    public function up()
    {
        Schema::create('hr_users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role', ['admin', 'hr']);
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hr_users');
    }
}
