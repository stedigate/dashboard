<?php

namespace Database\Seeders;

use App\Models\HelpdeskCategory;
use App\Models\HelpdeskLabel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HelpdeskCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HelpdeskCategory::factory()
            ->count(20)
            ->create();
    }
}
