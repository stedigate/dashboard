<?php

namespace Database\Factories;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\PayoutStatusEnum;
use App\Models\Enums\PayoutTypeEnum;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payout>
 */
class PayoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $wallet = Wallet::factory()->create();
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'company_id' => $wallet->company_id,
            'wallet_id' => $wallet->id,
            'trx' => Str::random(64),
            'status' => fake()->randomElement(PayoutStatusEnum::getAllValues()),
            'type' => fake()->randomElement(PayoutTypeEnum::getAllValues()),
            'currency' => fake()->randomElement(CurrencyEnum::getAllValues()),
            'blockchain' => fake()->randomElement(BlockchainEnum::getAllValues()),
            'amount' => fake()->numberBetween(0, 9999999),
            'version' => fake()->numberBetween(0, 1000),
        ];
    }
}
