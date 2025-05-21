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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('address');
            $table->string('phone');
            $table->foreignId('subscription_id')->nullable()->constrained()->onDelete('set null');
            $table->string('logo_url')->nullable();
            $table->string('sosmed')->nullable();
            $table->boolean('service_charge_enabled')->default(false);
            $table->decimal('service_charge_percentage', 5, 2)->nullable();
            $table->boolean('tax_enabled')->default(false);
            $table->decimal('tax_percentage', 5, 2)->nullable();
            $table->string('receipt_message')->nullable();
            $table->timestamp('subscription_start')->nullable();
            $table->timestamp('subscription_end')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
