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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('company_id')->nullable();
            $table->foreignId('wallet_id')->constrained('wallets')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('payout_id')->nullable(true)->constrained('payouts')->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('trx')->nullable(false)->unique();
            $table->unsignedInteger('amount')->nullable(false)->default(0);
            $table->enum('currency', ['usdt', 'usdc'])->nullable(false)->default('usdt');
            $table->enum('blockchain', ['tron', 'solana', 'ethereum'])->nullable(false)->default('tron');
            $table->enum('status', ['in_progress', 'confirmed', 'failed'])->nullable(false)->default('pending');
            $table->unsignedInteger('version')->nullable(false)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
