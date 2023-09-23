<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Type::truncate();
        });
        $type = ['Back-end','Front-end'];
        foreach ($type as $title) {
            $slug = str()->slug($title);
          Type::create([
            'title'=>$title,
            'slug'=>$slug,
          ]);
        }
    }
}
