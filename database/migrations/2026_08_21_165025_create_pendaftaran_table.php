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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id('id_pendaftaran');               // PK

            $table->unsignedBigInteger('id_siswa');     // FK
            $table->unsignedBigInteger('id_kursus');    // FK

            $table->date('tanggal_daftar');
            $table->enum('status', [
                'Menunggu',
                'Aktif',
                'Selesai',
                'Batal'
            ])->default('Menunggu');

            $table->timestamps();

            $table->foreign('id_siswa')
                ->references('id_siswa')
                ->on('siswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_kursus')
                ->references('id_kursus')
                ->on('kursus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Satu siswa tidak boleh mendaftar
            // kursus yang sama lebih dari satu kali
            $table->unique(['id_siswa', 'id_kursus']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
