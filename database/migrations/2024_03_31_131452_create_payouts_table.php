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
        Schema::create('payouts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('company_id')->nullable();
            $table->foreignId('wallet_id')->constrained('wallets')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('trx')->nullable(false)->unique();
            $table->unsignedInteger('amount')->nullable(false)->default(0);
            $table->enum('currency', ['usdt', 'usdc'])->nullable(false)->default('usdt');
            $table->enum('blockchain', ['tron', 'solana', 'ethereum'])->nullable(false)->default('tron');
            $table->enum('status', ['pending', 'in_progress', 'completed', 'failed'])->nullable(false)->default('pending');
            $table->enum('type', ['automatic', 'manual'])->nullable(false)->default('manual');
            $table->unsignedInteger('version')->nullable(false)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payouts');
    }
};
