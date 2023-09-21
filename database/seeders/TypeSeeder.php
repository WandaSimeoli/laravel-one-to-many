<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::truncate();
        for ($i=0; $i <10 ; $i++) { 
            $type = new Type();
            $type->title= fake()->words(3, true);
            $type->slug = fake()->slug();
            $type->save();
        }
    }
}
