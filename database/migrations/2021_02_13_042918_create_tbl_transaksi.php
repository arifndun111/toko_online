<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTransaksi extends Migration
{
    /**jumlah_transaksi, kode_transaksi, metode_pembayaran,
    kurir, ongkir, id_keranjang, no_resi, waktu_sampai,
    id_customer
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_transaksi', function (Blueprint $table) {
            $table->id();

            $table->integer("jumlah_transaksi");
            $table->string("kode_transaksi");
            $table->integer("metode_pembayaran");
            $table->integer("kurir");
            $table->decimal("ongkir", 9, 2);
            $table->integer("id_keranjang");
            $table->string("no_resi");
            $table->dateTime("waktu_sampai");
            $table->integer("id_customer");

            $table->integer("created_by");
            $table->integer("updated_by");
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
        Schema::dropIfExists('tbl_transaksi');
    }
}
