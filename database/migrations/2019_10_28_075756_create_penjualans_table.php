<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenjualansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->string('id_penjualan', 10)->primary();
            $table->integer('jumlah_pembelian');
            $table->integer('satuan');
            $table->integer('total');
            $table->integer('potongan_manual');
            $table->unsignedBigInteger('id_barang');
            $table->string('id_promo');
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
        Schema::dropIfExists('penjualans');
    }
}
