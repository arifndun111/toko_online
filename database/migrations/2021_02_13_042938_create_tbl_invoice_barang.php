<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInvoiceBarang extends Migration
{
    /**id_invoice, id_barang, id_customer,
    jumlah_barang, jumlah_harga
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_invoice_barang', function (Blueprint $table) {
            $table->id();

            $table->integer("id_invoice");
            $table->integer("id_barang");
            $table->integer("id_customer");
            $table->integer("jumlah_barang");
            $table->decimal("jumlah_harga", 9, 2);

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
        Schema::dropIfExists('tbl_invoice_barang');
    }
}
