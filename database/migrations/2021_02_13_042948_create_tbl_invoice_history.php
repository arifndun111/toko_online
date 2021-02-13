<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblInvoiceHistory extends Migration
{
    /**id_invoice, status, waktu_status,
    deskripsi
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_invoice_history', function (Blueprint $table) {
            $table->id();

            $table->integer("id_invoice");
            $table->integer("status");
            $table->dateTime("waktu_status");
            $table->text("deskripsi");

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
        Schema::dropIfExists('tbl_invoice_history');
    }
}
