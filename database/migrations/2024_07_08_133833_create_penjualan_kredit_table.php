<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenjualanKreditTable extends Migration
{
    public function up()
    {
        Schema::create('penjualan_kredit', function (Blueprint $table) {
            $table->id('id_penjualan_kredit');
            $table->foreignId('pelanggan_id')->constrained('pelanggan', 'id_pelanggan');
            // $table->foreignId('user_id')->constrained('users', 'id_user');
            $table->date('tanggal_penjualan')->nullable();
            $table->decimal('total_harga', 15, 2)->nullable();
            $table->decimal('sisa_angsur', 15, 2)->nullable();
            $table->decimal('down_payment', 15, 2)->nullable();
            $table->decimal('bunga', 15, 2)->nullable();
            $table->integer('jangka_pembayaran')->nullable();
            $table->decimal('total_angsur_bulanan', 15, 2)->nullable();
            $table->enum('status', ['selesai', 'berjalan'])->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penjualan_kredit');
    }
}
