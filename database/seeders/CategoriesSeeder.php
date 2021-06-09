<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new Category();
        $category->name = 'cafe';
        $category->description = 'good';
        $category->save();

        $category = new Category();
        $category->name = 'juice';
        $category->description = 'good';
        $category->save();

        $category = new Category();
        $category->name = 'wine';
        $category->description = 'good';
        $category->save();

    }
}
