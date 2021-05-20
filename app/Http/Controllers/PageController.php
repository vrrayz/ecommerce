<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        return view('index');
    }
    public function shop(Request $request)
    {
        $categories = Category::all();
        $subCategoryProducts = $categories->first()->subCategories->first()->products;
        if($request->subCategory){
            $subCategoryProducts = SubCategory::where('name',$request->subCategory)->get()->first()->products;
        }
        return view('shop')->with([
            'categories' => $categories,
            'subCategoryProducts' => $subCategoryProducts,
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
