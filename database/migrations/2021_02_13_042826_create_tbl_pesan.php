<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPesan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pesan', function (Blueprint $table) {
            $table->id();

            $table->integer("customer_id");
            $table->text("isi_pesan");
            $table->dateTime("tanggal_waktu");
            $table->integer("id_chat_previous");
            $table->integer("chat_status");

            // id_customer, isi_pesan, tanggal_waktu, id_chat_previous, chat_status

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
        Schema::dropIfExists('tbl_pesan');
    }
}
