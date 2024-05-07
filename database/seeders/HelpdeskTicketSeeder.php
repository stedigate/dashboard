<?php

namespace Database\Seeders;

use App\Models\HelpdeskTicket;
use App\Models\Wallet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelpdeskTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HelpdeskTicket::factory()
            ->count(20)
            ->hasMessage(15)
            ->create();
    }
}
