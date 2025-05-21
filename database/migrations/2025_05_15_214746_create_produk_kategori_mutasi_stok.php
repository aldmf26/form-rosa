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
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained()->onDelete('cascade');
            $table->string('nama');
            $table->string('urutan');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained()->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained()->onDelete('cascade');
            $table->string('barcode');
            $table->string('nama');
            $table->integer('harga');
            $table->integer('stok');
            $table->boolean('monitor_stok')->default(true)->after('stok');; // Kolom baru
            $table->string('tipe_harga_default');
            $table->boolean('gunakan_resep');
            $table->string('deskripsi')->nullable();
            $table->boolean('is_favorite')->default(false);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        Schema::create('harga_varians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produks')->onDelete('cascade');
            $table->string('tipe');
            $table->integer('harga');
            $table->timestamps();
        });

        Schema::create('reseps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('produk_id')->constrained('produks')->onDelete('cascade');
            $table->foreignId('bahan_id')->constrained('produks')->onDelete('cascade');
            $table->float('jumlah');
            $table->string('satuan');
            $table->timestamps();
        });


        Schema::create('mutasi_stoks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_id')->constrained()->onDelete('cascade');
            $table->string('no_nota');
            $table->foreignId('produk_id')->constrained('produks')->onDelete('cascade');
            $table->enum('tipe', ['masuk', 'keluar', 'opname'])->notNullable();
            $table->integer('jumlah');
            $table->integer('stok_sebelumnya');
            $table->integer('stok_sesudah');
            $table->text('keterangan')->nullable();
            $table->text('status');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseps');
        Schema::dropIfExists('mutasi_stoks');
        Schema::dropIfExists('harga_varians');
        Schema::dropIfExists('produks');
        Schema::dropIfExists('kategoris');
    }
};
