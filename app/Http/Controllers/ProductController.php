<?php

namespace App\Http\Controllers;

use App\Http\Requests\Product;
use App\Http\Services\ProductService;
use App\Http\Services\CategoryService;
use App\Models\Category;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    protected $productService;
    protected $categoryService;
    public function __construct(ProductService $productService, CategoryService $categoryService)
    {
        $this->productService = $productService;
        $this->categoryService = $categoryService;
    }
    public function index(){
        $products = $this->productService->getAll();
        return view('product.list',compact('products'));
    }
    public function showCreateForm()
    {
        $categories = $this->categoryService->getAll();
        return view('product.create',compact('categories'));

    }

    public function create(Product $request)
    {

        $this->productService->store($request);
        return redirect()->route('products.index');
    }
    public function showEdit(Request $request){
        $id = $request->id;
        $product = $this->productService->getById($id);
        return view('product.edit',compact('product'));
    }
    public function update(Product $request){
        $this->productService->update($request);
        return redirect()->route('products.index');
    }
    public function delete(Request $request){
        $this->productService->delete($request->id);
        return redirect()->route('products.index');
    }
}
