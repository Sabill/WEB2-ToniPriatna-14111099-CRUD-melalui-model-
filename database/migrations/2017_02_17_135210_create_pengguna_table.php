<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePenggunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_pengguna', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->integer ('id_jabatan');
            $table->string ('nama_pengguna');
            $table->string ('jenis_kelamin');
            $table->string ('no_telp');
            $table->string ('username');
            $table->string ('password');
            $table->string ('status');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_pengguna');
    }
}
