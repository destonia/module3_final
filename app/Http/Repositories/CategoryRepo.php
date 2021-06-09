<?php


namespace App\Http\Repositories;


use App\Models\Category;

class CategoryRepo
{
    public function getAll(){
        return Category::all();
    }
}
