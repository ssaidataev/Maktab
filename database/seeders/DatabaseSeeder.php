<?php

namespace Database\Seeders;

use App\Models\EducationDate;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoomSeeder::class,
            CompetitionTypeSeeder::class,
            CompetitionSeeder::class,
            FeedbackSeeder::class,
            MarkTypeSeeder::class,
            PositionSeeder::class,
            UserSeeder::class,
            EducationDateSeeder::class,
            EducationLevelSeeder::class,
            TeacherSeeder::class,
            StudentClassesSeeder::class,
            StudentStatusSeeder::class,
            StudentSeeder::class,


        ]);


    }
}
