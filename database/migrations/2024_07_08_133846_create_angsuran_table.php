<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngsuranTable extends Migration
{
    public function up()
    {
        Schema::create('angsuran', function (Blueprint $table) {
            $table->id('id_angsuran');
            $table->foreignId('penjualan_kredit_id')->constrained('penjualan_kredit', 'id_penjualan_kredit');
            $table->date('tanggal_pembayaran')->nullable();
            $table->decimal('jumlah_angsur', 15, 2)->nullable();
            $table->integer('no_angsur')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('angsuran');
    }
}
