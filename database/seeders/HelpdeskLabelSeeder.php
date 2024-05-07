<?php

namespace Database\Seeders;

use App\Models\HelpdeskLabel;
use App\Models\HelpdeskTicket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelpdeskLabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HelpdeskLabel::factory()
            ->count(20)
            ->create();
    }
}
