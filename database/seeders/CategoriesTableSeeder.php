<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $categories = ['Summer', 'Fall', 'Winter', 'Spring'];

        foreach ($categories as $category) {
            \App\Models\Category::create(['name' => $category]);
        }

    }
}
