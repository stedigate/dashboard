<?php

namespace Database\Factories;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\TransactionStatusEnum;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use App\Models\Payout;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $payout = Payout::factory()->create();
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'company_id' => $payout->wallet->company_id,
            'wallet_id' => $payout->wallet->id,
            'payout_id' => $payout->id,
            'trx' => Str::random(64),
            'status' => fake()->randomElement(TransactionStatusEnum::getAllValues()),
            'currency' => fake()->randomElement(CurrencyEnum::getAllValues()),
            'blockchain' => fake()->randomElement(BlockchainEnum::getAllValues()),
            'amount' => fake()->numberBetween(0, 9999999),
            'version' => fake()->numberBetween(0, 1000),
        ];
    }
}
