<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahRelasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('pengunjung')) {
            Schema::table('pengunjung', function (Blueprint $kolom) {
                $kolom->integer('instansi_id')->unsigned()->after('id');
                $kolom->integer('pegawai_id')->unsigned()->after('instansi_id');
                $kolom->timestamps();
                $kolom->foreign('instansi_id')->references('id')->on('instansi');
                $kolom->foreign('pegawai_id')->references('id')->on('pegawai');
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
