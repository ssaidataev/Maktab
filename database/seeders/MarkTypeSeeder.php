<?php

namespace Database\Seeders;

use App\Models\MarkType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MarkType::factory()->count(10)->create();

    }
}
