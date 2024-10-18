<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductsController extends Controller
{
    public function list()
    {
        $products = Product::paginate(1);
        return inertia('Products/List', ['products' => $products]);
    }
}
