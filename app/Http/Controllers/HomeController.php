<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Service;
use App\Models\Slide;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $product = Product::all();
        $service = Service::all();
        $slides = Slide::all();
        return view('home', compact('product', 'service', 'slides'));
    }
    public function product() {
        $product = Product::all();
        return view('product', compact('product'));
    }
    public function search(Request $request) {
        // dd($request->search);33333333333333333333333333333
        $search_result = Product::where('title_am', 'like', '%' . $request->search . '%')
                                ->orWhere('title_en', 'like', '%' . $request->search . '%')
                                ->orWhere('content_am', 'like', '%' . $request->search . '%')
                                ->orWhere('content_en', 'like', '%' . $request->search . '%')
                                ->get();
        return view('search', compact('search_result'));
    }
}
