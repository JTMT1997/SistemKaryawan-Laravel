<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatakaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datakaryawan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('status_id');
            $table->unsignedBigInteger('pendidikan_id');
            $table->unsignedBigInteger('posisi_id');
            $table->string('nama');
            $table->string('slug');
            $table->text('alamat');
            $table->integer('umur');
            $table->string('jenis_kelamin');
            $table->string('email');
            $table->string('no_telp');
            $table->date('ttl');
            $table->date('tgl_masuk');
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('posisi_id')->references('id')->on('posisi')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('pendidikan_id')->references('id')->on('pendidikan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datakaryawan');
    }
}
