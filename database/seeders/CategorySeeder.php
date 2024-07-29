<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'id' => 1,
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'id' => 2,
            'name' => 'UI/UX',
            'slug' => 'ui-ux'
        ]);

        Category::create([
            'id' => 3,
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Category::create([
            'id' => 4,
            'name' => 'Data Structure',
            'slug' => 'data-structure'
        ]);
    }
}
