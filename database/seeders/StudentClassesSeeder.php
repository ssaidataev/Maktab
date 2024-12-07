<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentClasses;
class StudentClassesSeeder extends Seeder
{

    public function run(): void
    {
        StudentClasses::factory()->count(10)->create();

    }
}
