<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('isi');
            $table->unsignedBigInteger('pertanyaan_id')->nullable();
            $table->unsignedBigInteger('profiles_id')->nullable();
            $table->timestamps();

            $table->foreign('pertanyaan_id')->references('id')->on('jawaban');
            $table->foreign('profiles_id')->references('id')->on('profiles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('komentar_pertanyaan');
    }
}
