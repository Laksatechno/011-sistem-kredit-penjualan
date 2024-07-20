<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPenjualanKreditTable extends Migration
{
    public function up()
    {
        Schema::create('detail_penjualan_kredit', function (Blueprint $table) {
            $table->id('id_detail_penjualan_kredit');
            $table->foreignId('penjualan_kredit_id')->constrained('penjualan_kredit', 'id_penjualan_kredit');
            $table->foreignId('barang_id')->constrained('barang', 'id_barang');
            $table->integer('kuantitas')->nullable();
            $table->decimal('harga_satuan', 15, 2)->nullable();
            $table->decimal('sub_total', 15, 2)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('detail_penjualan_kredit');
    }
}
