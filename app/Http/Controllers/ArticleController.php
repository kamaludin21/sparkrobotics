<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article()
    {
        $featured = Article::with('category')->latest()->first();
        $sidebar = Article::with('category')
            ->latest()
            ->skip(1)
            ->take(4)
            ->get();
        $articles = Article::with('category')
            ->latest()
            ->skip(5)
            ->take(10)
            ->get();
        return view('pages.news.index', compact('featured', 'sidebar', 'articles'));
    }

    public function articleByCategory(string $param1, $param2 = null)
    {
        $slug = $param2 ? $param2 : $param1;

        // Cari kategori berdasarkan slug
        $category = \App\Models\ArticleCategory::where('slug', $slug)->firstOrFail();

        // Ambil artikel yang memiliki kategori tersebut, lalu paginate
        $articles = \App\Models\Article::where('article_category_id', $category->id)
            ->latest()
            ->paginate(10);

        return view('pages.news.article', compact('category', 'articles'));
    }

    public function show(string $param1, $param2 = null)
    {
        $slug = $param2 ? $param2 : $param1;
        $article = \App\Models\Article::with('category')
            ->whereTranslation('slug', $slug)
            ->firstOrFail();
        $relatedArticles = \App\Models\Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();
        return view('pages.news.slug', compact('article', 'relatedArticles'));
    }
}
