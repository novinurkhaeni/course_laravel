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
        Schema::create('kursus', function (Blueprint $table) {
            $table->id('id_kursus');                    // BIGINT UNSIGNED, PK
            $table->unsignedBigInteger('id_admin');    // FK
            $table->string('nama_kursus', 150);
            $table->text('deskripsi')->nullable();
            $table->decimal('harga', 12, 2)->default(0);
            $table->integer('durasi')->nullable();      // dalam jam
            $table->enum('level', ['Pemula', 'Menengah', 'Mahir'])
                ->default('Pemula');
            $table->enum('status', [
                'Aktif',
                'Tidak Aktif'
            ])->default('Aktif');
            $table->timestamps();
            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kursus');
    }
};
