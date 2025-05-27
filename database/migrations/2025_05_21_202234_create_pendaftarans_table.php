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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('no_hp');
            $table->string('nama_lengkap');
            $table->string('nama_panggilan');
            $table->string('alamat');
            $table->string('instagram_facebook')->nullable();
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('sekolah_di');
            $table->string('agama');
            $table->string('nama_orangtua');
            $table->string('no_hp_orangtua');
            $table->boolean('is_active')->default(false);
            $table->timestamp('tanggal_daftar')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
