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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('id_pembayaran');                 // PK

            $table->unsignedBigInteger('id_pendaftaran'); // FK
            $table->unsignedBigInteger('id_metode');      // FK

            $table->decimal('jumlah', 12, 2);
            $table->dateTime('tanggal_pembayaran')->nullable();

            $table->enum('status_pembayaran', [
                'Menunggu',
                'Berhasil',
                'Gagal',
                'Dibatalkan'
            ])->default('Menunggu');

            $table->string('bukti_pembayaran', 255)->nullable();

            $table->timestamps();

            $table->foreign('id_pendaftaran')
                ->references('id_pendaftaran')
                ->on('pendaftaran')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('id_metode')
                ->references('id_metode')
                ->on('metode_pembayaran')
                ->onDelete('restrict')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
