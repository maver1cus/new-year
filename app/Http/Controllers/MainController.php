<?php

namespace App\Http\Controllers;

use App\Models\Product;

class MainController extends Controller
{
  public function index()
  {
    $products = Product::all();
    $texts = [
      'email' => 'vamsadik@mail.ru',
      'phone' => '8 (495) 642 58 54'
    ];

    return view('main', ['products' => $products]);
  }
}
