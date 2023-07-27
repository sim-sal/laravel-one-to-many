<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Technologie;
use App\Models\Project;

class TechnologieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $technologies = Technologie::factory()->count(10)->create();

        foreach ($technologies as $technologie) {

            $projects = Project::inRandomOrder()->limit(rand(1, 4))->get();

            $technologie->projects()->attach($projects);
        }
    }
}
