<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksiPengirimenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_pengirimen', function (Blueprint $table) {
            $table->bigIncrements('id_pengiriman');
            $table->integer('id_agen');
            $table->string('nama_pupuk');
            $table->integer('jumlah_pengiriman');
            $table->date('tanggal_transaksi');
            $table->integer('id_driver');
            $table->string('status_pengiriman')->default('Belum Diterima');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi_pengirimen');
    }
}
