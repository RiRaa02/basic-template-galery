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
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('albumid');
            $table->string('nama_album');
            $table->text('deskripsi');
            $table->date('tglbuat');
            $table->integer('ttl_foto');
            $table->unsignedBigInteger('userid');
            $table->timestamps();

            $table->foreign('userid')->references('userid')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('albums');
    }
};