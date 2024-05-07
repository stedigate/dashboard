<?php

namespace Database\Seeders;

use App\Models\HelpdeskMessage;
use App\Models\HelpdeskTicket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelpdeskMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HelpdeskMessage::factory()
            ->count(20)
            ->create();
    }
}
