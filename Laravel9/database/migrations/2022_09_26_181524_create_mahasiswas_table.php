<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30)->nullable();
            $table->string('nim', 19)->unique();
            $table->text('alamat');
            $table->string('tmpt_lhr')->comment("tempat lahir mahasiswa");
            $table->date('tgl_lhr')->comment("tanggal lahir mahasiswa");
            $table->string('no_hp')->unique()->comment("nomor hp mahasiswa");
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
        Schema::dropIfExists('mahasiswas');
    }
};
