<?php

namespace Database\Seeders;

use Faker\Generator;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        for ($i = 0; $i < 50; $i++) {


            Project::create([


                'title' => $faker->words(rand(2, 10), true),
                'repo' => $faker->words(rand(2, 10), true),
                'description' => $faker->paragraphs(rand(2, 20), true),
            ]);
        }
    }
}
