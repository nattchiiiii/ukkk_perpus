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
        Schema::create('kategori__bukus', function (Blueprint $table) {
            $table->id();      
            $table->foreignId('kategori_id')->constrained('kategori__bukus'); 
            $table->string('kode_buku');
            $table->string('judul');
            $table->string('pengarang');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
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
        Schema::dropIfExists('kategori__bukus');
    }
};
