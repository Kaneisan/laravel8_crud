<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawais', function (Blueprint $table) {
            $table->id('id');
            $table->integer('nip');
            $table->string('nama');
            $table->string('tempatlahir');
            $table->string('alamat');
            $table->date('tgllahir')->nullable();
            $table->char('kelamin');
            $table->string('gol');
            $table->string('eselon');
            $table->string('jabatan');
            $table->string('tempattugas');
            $table->string('agama');
            $table->string('unitkerja');
            $table->string('nohp');
            $table->integer('npwp');
            $table->string('image')->default('kosong');
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
        Schema::dropIfExists('pegawais');
    }
}
