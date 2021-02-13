<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblFotoBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_foto_barang', function (Blueprint $table) {
            $table->id();

            $table->string("nama_link");
            $table->string("url");
            $table->integer("id_barang");
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
        Schema::dropIfExists('tbl_foto_barang');
    }
}
