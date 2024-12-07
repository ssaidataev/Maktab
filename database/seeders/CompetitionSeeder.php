<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Competition;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competition::factory()->count(10)->create();
    }
}
