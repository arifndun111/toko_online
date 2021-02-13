<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblKeranjang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_keranjang', function (Blueprint $table) {

            // id_barang, jumlah_pesanan, jumlah_harga,customer_id
            $table->id();

            $table->integer("jumlah_pesanan");
            $table->decimal("jumlah_harga", 9, 2);
            $table->integer("id_barang");
            $table->integer("customer_id");
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
        Schema::dropIfExists('tbl_keranjang');
    }
}
