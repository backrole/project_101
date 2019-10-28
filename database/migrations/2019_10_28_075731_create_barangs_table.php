<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigInteger('id_barangs')->primary();
            $table->string('nama_barang');
            $table->integer('stock_grosir');
            $table->integer('stock_retail');
            $table->integer('harga_grosir');
            $table->integer('harga_retail');
            $table->integer('isi_per_box');
            $table->string('status_pembayaran');
            $table->string('id_supplier');
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
        Schema::dropIfExists('barangs');
    }
}
