<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelamarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamar', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('posisi');
            $table->string('nama');
            $table->integer('ktp');
            $table->string('tempat_tgl_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->string('gol_darah');
            $table->string('status');
            $table->string('alamat_ktp');
            $table->string('alamat_tinggal');
            $table->string('email');
            $table->integer('no_telp');
            $table->integer('no_orgterdekat'); 
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
        Schema::dropIfExists('pelamar');
    }
}
