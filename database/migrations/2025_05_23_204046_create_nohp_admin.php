<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nohp_admin', function (Blueprint $table) {
            $table->id();
            $table->string('nohp');
            $table->timestamps();
        });

        DB::table('nohp_admin')->insert([
            'nohp' => 6285190321515
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nohp_admin');
    }
};
