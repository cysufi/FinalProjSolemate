<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Sale;

class PageController extends Controller
{
    public function home()
    {
        return view('home', [
            'productCount' => Product::count(),
            'lowStock' => Product::where('stock_quantity', '<=', 5)->count(),
            'salesCount' => Sale::count(),
            'featuredProducts' => Product::orderByDesc('created_at')->take(4)->get(),
        ]);
    }

    public function about()
    {
        return view('about');
    }
}
