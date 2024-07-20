<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string('user_id', 255)->primary();
            $table->string('name', 255);
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->enum('role', ['superadmin', 'manajer', 'karyawan'])->default('karyawan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
