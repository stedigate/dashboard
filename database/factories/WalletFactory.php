<?php

namespace Database\Factories;

use App\Models\Company;
use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class WalletFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $company = Company::factory()->create();
        $balance = fake()->numberBetween(0, 9999999);
        return [
            'created_at' => now(),
            'updated_at' => now(),
            'company_id' => $company->id,
            'address_base58' => Str::random(34),
            'private_key' => Str::random(64),
            'public_key' => Str::random(130),
            'status' => fake()->randomElement(WalletStatusEnum::getAllValues()),
            'type' => fake()->randomElement(WalletTypeEnum::getAllValues()),
            'blockchain' => fake()->randomElement(BlockchainEnum::getAllValues()),
            'balance' => $balance,
            'balance_usdt' => $balance,
            'balance_usdc' => 0,
            'version' => fake()->numberBetween(0, 1000),
        ];
    }

    /**
     * Indicate that the model's balance.
     */
    public function balance($amount): static
    {
        return $this->state(fn (array $attributes) => [
            'balance' => $amount,
        ]);
    }

    /**
     * Indicate that the model's balance.
     */
    public function usdt($amount): static
    {
        return $this->state(fn (array $attributes) => [
            'balance_usdt' => $amount,
        ]);
    }

    /**
     * Indicate that the model's balance.
     */
    public function usdc($amount): static
    {
        return $this->state(fn (array $attributes) => [
            'balance_usdc' => $amount,
        ]);
    }
}
