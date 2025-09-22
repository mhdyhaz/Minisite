<?php

// app/Http/Controllers/ProductController.php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    public function show($id)
    {
        $product = Product::findOrFail($id);
    
        $relatedProducts = Product::where('id', '!=', $id)
                                  ->inRandomOrder()
                                  ->limit(4)
                                  ->get();
    
        return view('Product.productDetail', compact('product', 'relatedProducts'));
    }
    
}
