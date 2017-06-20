<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abens', function (Blueprint $table) {
            $table->string('nip');
            $table->date('tanggal');
            $table->time('masuk');
            $table->time('keluar');
            $table->time('istirahat_mulai');
            $table->time('istirahat_selesai');
            $table->time('toleransi');
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
        Schema::dropIfExists('absens');
    }
}
