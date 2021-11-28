<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TambahTimestamp extends Migration
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
                $kolom->string('nama_pengunjung')->default('');
                $kolom->string('no_hp')->default('');
                $kolom->string('keperluan')->default('');
                $kolom->timestamps();
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
