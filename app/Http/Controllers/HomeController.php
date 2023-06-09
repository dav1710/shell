<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $product = Product::all();
        return view('home', compact('product'));
    }
    public function product() {
        $product = Product::all();
        return view('product', compact('product'));
    }
}
