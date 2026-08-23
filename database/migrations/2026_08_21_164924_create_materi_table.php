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
        Schema::create('materi', function (Blueprint $table) {
            $table->id('id_materi');                    // PK

            $table->unsignedBigInteger('id_kursus');   // FK
            $table->unsignedBigInteger('id_guru');     // FK

            $table->string('judul', 150);
            $table->text('deskripsi')->nullable();

            $table->enum('jenis_materi', [
                'Teks',
                'Video',
                'PDF'
            ])->default('Teks');

            $table->text('isi')->nullable();

            // Menyimpan URL/path video
            $table->string('url_video', 500)->nullable();

            // Menyimpan nama/path file PDF
            $table->string('file_materi', 255)->nullable();

            $table->integer('urutan')->default(1);

            $table->timestamps();

            $table->foreign('id_kursus')
                ->references('id_kursus')
                ->on('kursus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_guru')
                ->references('id_guru')
                ->on('guru')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materi');
    }
};
