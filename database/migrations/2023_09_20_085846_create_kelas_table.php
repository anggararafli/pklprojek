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
        Schema::create('kelas', function (Blueprint $table) {
            $table->increments('id_kelas');
            $table->string('nama_kelas');
            $table->string('jurusan');
            $table->timestamps();
        });
    }

    /**
     * Reverse pthe migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas');
    }
};
