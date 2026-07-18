<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleCategory;
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
        $category = ArticleCategory::where('slug', $slug)->firstOrFail();

        // Ambil artikel yang memiliki kategori tersebut, lalu paginate
        $articles = Article::where('article_category_id', $category->id)
            ->latest()
            ->paginate(10);

        return view('pages.news.article', compact('category', 'articles'));
    }

    public function show(string $param1, $param2 = null)
    {
        $slug = $param2 ? $param2 : $param1;
        $article = Article::with('category')
            ->whereTranslation('slug', $slug)
            ->firstOrFail();
        $relatedArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();
        return view('pages.news.slug', compact('article', 'relatedArticles'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('q');

        // Gunakan whereTranslationLike untuk mencari di kolom terjemahan
        $articles = Article::whereTranslationLike('title', "%{$keyword}%")
            // ->orWhereTranslationLike('content', "%{$keyword}%") // Uncomment jika ingin mencari dari isi konten juga
            ->latest('updated_at')
            ->paginate(10)
            ->withQueryString();

        // Membuat mock object category untuk dikirim ke view agar <x-layout.news-nav> tidak error
        $category = (object) [
            'title' => 'Search Results: ' . $keyword,
            'slug' => 'search'
        ];

        return view('pages.news.article', compact('articles', 'category'));
    }


    public function downloadCenter()
    {
        return view('pages.news.download-center');
    }
}
