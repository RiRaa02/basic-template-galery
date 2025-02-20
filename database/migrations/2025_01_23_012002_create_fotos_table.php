<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fotos', function (Blueprint $table) {
            $table->bigIncrements('fotoid');
            $table->string('gambar');
            $table->text('deskripsi_foto');
            $table->date('tglunggah');
            $table->string('jumlah_foto');
            $table->unsignedBigInteger('albumid');
            $table->unsignedBigInteger('userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fotos');
    }
};