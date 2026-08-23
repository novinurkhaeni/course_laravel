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
        Schema::create('guru', function (Blueprint $table) {
            $table->id('id_guru');                    // BIGINT UNSIGNED, PK
            $table->string('nama', 100);              // VARCHAR(100)
            $table->string('email', 100)->unique();   // VARCHAR(100)
            $table->string('password', 255);          // VARCHAR(255)
            $table->string('no_hp', 20)->nullable(); // VARCHAR(20)
            $table->string('keahlian', 100)->nullable();
            $table->string('photo', 255)->nullable();
            $table->enum('status', [
                'Aktif',
                'Tidak Aktif'
            ])->default('Aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guru');
    }
};
