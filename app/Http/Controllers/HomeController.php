<?php

namespace App\Http\Controllers;

use App\Models\About;
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
        $about = About::all();
        return view('home', compact('product', 'service', 'slides', 'about'));
    }
    public function product() {
        $product = Product::paginate(4);
        return view('product', compact('product'));
    }
    public function search(Request $request) {
        // dd($request->search);33333333333333333333333333333
        $search_result = Product::where('title_am', 'like', '%' . $request->search . '%')
                                ->orWhere('title_en', 'like', '%' . $request->search . '%')
                                ->orWhere('content_am', 'like', '%' . $request->search . '%')
                                ->orWhere('content_en', 'like', '%' . $request->search . '%')
                                ->paginate(12);
        return view('search', compact('search_result'));
    }
}
