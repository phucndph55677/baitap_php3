<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Lesion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            Course::factory(10)->create()->each(function ($course) {
                Lesion::factory(5)->create(['course_id' => $course->id]);
            });
    }
}
