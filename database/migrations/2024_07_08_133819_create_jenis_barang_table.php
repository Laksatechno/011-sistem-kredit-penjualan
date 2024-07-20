<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJenisBarangTable extends Migration
{
    public function up()
    {
        Schema::create('jenis_barang', function (Blueprint $table) {
            $table->id('id_jenis');
            $table->string('nama_jenis', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jenis_barang');
    }
};
