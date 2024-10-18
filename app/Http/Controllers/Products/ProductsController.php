<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\Products\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $products = Product::paginate(10);
        return inertia('Products/List', ['products' => $products]);
    }

    public function create(CreateProductRequest $request)
    {
        $products = $request->products;

        $productsData = array_map(function ($product) {
            return [
                'name' => $product['name'],
                'amount' => $product['amount'],
                'price' => $product['price'],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }, $products);

        Product::insert($productsData);

        return back()->with('message', 'Продукты успешно созданы');
    }
}
