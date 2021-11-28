<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengunjung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('pengunjung', function(Blueprint $kolom){
            $kolom->increments('id');

            //kolom untuk foreign Key nya
            $kolom->unsignedInteger('pegawai_id')->nullable();
            $kolom->unsignedInteger('instansi_id')->nullable();
            $kolom->string('nama_pengunjung');
            $kolom->string('no_hp');
            $kolom->string('keperluan');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengunjung');

    }
}
