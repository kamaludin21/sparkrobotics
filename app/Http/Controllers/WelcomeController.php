<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Settings\Company;
use App\Settings\Hero;
use Illuminate\Support\Facades\Cache;

class WelcomeController extends Controller
{
    public function index()
    {
        $locale = app()->getLocale();
        $hero = app(Hero::class);
        $hero->slides = collect($hero->slides)
            ->where('is_visible', true)
            ->values()
            ->toArray();

        $settings = app(Company::class);
        $clients = collect($settings->clients)->take(10);
        $categories = Category::join('category_translations', 'categories.id', '=', 'category_translations.category_id')
            ->select(
                'categories.id',
                'categories.image',
                'category_translations.name'
            )
            ->where('category_translations.locale', $locale)
            ->whereNotNull('categories.image')
            ->take(3)
            ->get();
        $products = Product::join('product_translations', 'products.id', '=', 'product_translations.product_id')
            ->select(
                'products.id',
                'products.thumbnail_image',
                'products.title',
                'products.slug',
                'product_translations.title_section'
            )
            ->where('product_translations.locale', $locale)
            ->orderBy('products.sort', 'asc')
            ->take(3)
            ->get();

        $brands = Brand::select('id', 'name', 'website', 'logo_path')->get();

        $articles = Article::join('article_translations', 'articles.id', '=', 'article_translations.article_id')
            ->select(
                'articles.id',
                'articles.image',
                'articles.type',
                'articles.video_url',
                'articles.updated_at',
                'article_translations.title'
            )
            ->where('article_translations.locale', $locale)
            ->latest('articles.updated_at')
            ->take(3)
            ->get();

        return view('pages.index', compact(
            'hero',
            'settings',
            'clients',
            'categories',
            'products',
            'brands',
            'articles'
        ));
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
