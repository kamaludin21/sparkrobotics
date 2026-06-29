<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Brand;
use App\Models\Product;
use App\Settings\Company;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $data = Article::latest()->take(5)->get();
        $products = Product::take(3)->get();
        $settings = app(Company::class);
        $brands = Brand::all();
        $articles = Article::latest()->take(3)->get();
        return view('pages.index', compact('data','products', 'settings', 'brands', 'articles'));
    }

    public function products()
    {
        return view('pages.products.index');    
    }
    public function productDetail()
    {
        return view('pages.products.detail');    
    }
}
