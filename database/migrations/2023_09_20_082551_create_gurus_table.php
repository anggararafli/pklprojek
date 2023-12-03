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
        Schema::create('gurus', function (Blueprint $table) {
            $table->increments('id_guru');
            $table->integer('nip')->unique();
            $table->string('nama_guru');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('Tempat_Lahir');
            $table->string('Tanggal_Lahir');
            $table->text('Alamat');
            $table->enum('Agama', ['islam', 'kristen', 'hindu', 'budha']);
            $table->string('Email');
            $table->string('username_guru');
            $table->string('password_guru');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gurus');
    }
};
