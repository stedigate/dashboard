<?php

namespace Database\Seeders;

use App\Models\Payout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PayoutSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Payout::factory()
            ->count(60)
            ->hasTransactions(60)
            ->create();
    }
}
