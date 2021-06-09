<?php


namespace App\Http\Repositories;


use App\Models\Product;

class ProductRepo
{
    public function getAll(){
        return Product::all();
    }
    public function getById($id){
        return Product::findOrFail($id);
    }
    public function store($product){
        $product->save();
    }
    public function delete($product){
        $product->delete();
    }
}
