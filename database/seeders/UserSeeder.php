<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()
            ->count(60)
            ->hasWallets(60)
            ->hasPayouts(60)
            ->hasTransactions(60)
            ->create();
    }
}
