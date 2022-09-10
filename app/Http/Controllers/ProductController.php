<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductCollection;
use App\Http\Resources\ProductResource;
use App\Models\Product;

class ProductController extends Controller
{
  public function index()
  {
    $products = Product::all();
    return new ProductCollection($products);
  }

  public function show($product_id)
  {
    $product = Product::findOrFail($product_id);
    return new ProductResource($product);
  }

  public function destroy($product_id)
  {
    return response()->json(Product::find($product_id)->deleteOrFail());
  }

}
