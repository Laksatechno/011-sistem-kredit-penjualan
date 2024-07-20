<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelangganTable extends Migration
{
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id('id_pelanggan');
            $table->string('nama_pelanggan', 255)->nullable();
            $table->text('alamat')->nullable();
            $table->string('telepon', 20)->nullable();
            $table->string('file_identitas')->nullable();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE pelanggan AUTO_INCREMENT = 10110001;');
    }

    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
