<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i=0; $i < 20; $i++) { 
            $project = new Project();
            $project->title= fake()->words(5, true);
            $project->slug = fake()->slug();
            $project->content= fake()->paragraph(3);
            $project->save();
        }
    }
}
