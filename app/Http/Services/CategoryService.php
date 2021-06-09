<?php


namespace App\Http\Services;


use App\Http\Repositories\CategoryRepo;

class CategoryService
{
    protected $categoryRepo;
    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAll()
    {
        return $this->categoryRepo->getAll();
    }
}
