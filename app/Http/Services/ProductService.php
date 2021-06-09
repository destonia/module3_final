<?php


namespace App\Http\Services;


use App\Http\Repositories\ProductRepo;
use App\Models\Product;

class ProductService
{
    protected $productRepo;

    public function __construct(ProductRepo $productRepo)
    {
        $this->productRepo = $productRepo;
    }
    public function getAll(){
        return $this->productRepo->getAll();
    }
    public function getById($id){
        return $this->productRepo->getById($id);
    }
    public function store($request)
    {
        $product = new Product();
        $product->fill($request->all());
        if ($request->file('image')) {
            $product->image = $request->file('image')->store('image', 'public');
        } else {
            $product->image = 'https://blackmantkd.com/wp-content/uploads/2017/04/default-image-620x600.jpg';
        }
        $this->productRepo->store($product);
    }
    public function delete($id){
        $product = $this->productRepo->getById($id);
        $this->productRepo->delete($product);
    }
    public function update($request)
    {
        $product = $this->productRepo->getById($request->id);
        $product->fill($request->all());
        if ($request->file('image')) {
            $product->image = $request->file('image')->store('image', 'public');
        }
        $this->productRepo->store($product);
    }
}
