<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function shop()
    {
        $categories = Category::all();
        return view('shop')->with([
            'categories' => $categories
        ]);
    }
    public function detail()
    {
        return view('detail');
    }
    public function cart()
    {
        return view('cart');
    }
    public function checkout()
    {
        return view('checkout');
    }
}
