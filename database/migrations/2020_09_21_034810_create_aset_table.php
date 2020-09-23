<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aset', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->char('kode', 18);
            $table->char('register', 4)->nullable();
            $table->enum('kib', (['KIB B', 'KIB E']));
            $table->string('lokasi');
            $table->string('merk')->nullable();
            $table->char('tahun', 4)->nullable();
            $table->integer('jumlah');
            $table->bigInteger('harga');
            $table->bigInteger('nilai');
            $table->integer('akumulasi');
            $table->string('keterangan')->nullable();
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
        Schema::dropIfExists('aset');
    }
}
