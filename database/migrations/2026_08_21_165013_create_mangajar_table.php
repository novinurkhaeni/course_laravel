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
        Schema::create('mengajar', function (Blueprint $table) {
            $table->id('id_mengajar');                  // PK

            $table->unsignedBigInteger('id_guru');      // FK
            $table->unsignedBigInteger('id_kursus');    // FK

            $table->date('tanggal_mulai')->nullable();
            $table->date('tanggal_selesai')->nullable();

            $table->timestamps();

            $table->foreign('id_guru')
                ->references('id_guru')
                ->on('guru')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_kursus')
                ->references('id_kursus')
                ->on('kursus')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            // Mencegah guru yang sama
            // ditambahkan dua kali pada kursus yang sama
            $table->unique(['id_guru', 'id_kursus']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mangajar');
    }
};
