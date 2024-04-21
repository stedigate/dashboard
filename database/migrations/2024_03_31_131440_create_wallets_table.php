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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('company_id')->nullable();
            $table->mediumText('private_key')->nullable(false)->default('')->unique();
            $table->string('public_key')->nullable(false)->default('')->unique();
            $table->string('address_base58')->nullable(false)->default('')->unique();
            $table->enum('status', ['active', 'freeze', 'deleted'])->nullable(false)->default('active');
            $table->enum('type', ['deposit', 'withdraw'])->nullable(false)->default('deposit');
            $table->enum('blockchain', ['tron', 'solana', 'ethereum'])->nullable(false)->default('tron');
            $table->double('balance')->nullable(false)->default(0);
            $table->double('balance_usdt')->nullable(false)->default(0);
            $table->double('balance_usdc')->nullable(false)->default(0);
            $table->double('balance_busd')->nullable(false)->default(0);
            $table->unsignedInteger('version')->nullable(false)->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
