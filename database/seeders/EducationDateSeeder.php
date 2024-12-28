<?php

namespace Database\Seeders;

use App\Models\EducationDate;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EducationDate::factory()->count(10)->create();

    }
}
