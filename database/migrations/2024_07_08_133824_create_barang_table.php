<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id('id_barang');
            $table->string('nama_barang', 255)->nullable();
            $table->foreignId('jenis_id')->constrained('jenis_barang', 'id_jenis');
            $table->string('merk', 255)->nullable();
            $table->integer('stok')->nullable();
            $table->string('satuan', 20)->nullable();
            $table->decimal('harga', 15, 2)->nullable();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE barang AUTO_INCREMENT = 20240001;');
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
