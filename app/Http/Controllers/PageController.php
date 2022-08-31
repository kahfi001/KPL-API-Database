<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function program()
    {
        $product = Product::all();
        return view('program', [
            'product' => $product
        ]);
    }
}
