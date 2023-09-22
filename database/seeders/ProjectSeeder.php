<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Support\Str;

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
            $project->slug = Str::of($project->title)->slug('-');
            $project->content= fake()->paragraph(3);
            $randomType = Type::inRandomOrder()->first();
            $project->type_id = $randomType->id;
            $project->save();
        }
    }
}
