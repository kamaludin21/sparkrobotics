<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();

        $products = Product::query()
            // Filter Pencarian
            ->when($request->filled('search'), function ($query) use ($request) {
                $search = $request->search;
                $query->where(function ($q) use ($search) {
                    // Cukup cari berdasarkan 'title' saja
                    $q->where('title', 'like', '%' . $search . '%');

                    // JIKA Anda punya kolom lain untuk deskripsi, buka komentar di bawah ini
                    // dan ganti 'description' dengan nama kolom yang ada di database Anda:
                    // ->orWhere('description', 'like', '%' . $search . '%');
                });
            })
            // Filter Kategori (Berdasarkan Relasi Many-to-Many / Pivot)
            ->when($request->filled('categories'), function ($query) use ($request) {
                // Menggunakan whereHas untuk mencari produk yang memiliki kategori terkait
                $query->whereHas('categories', function ($q) use ($request) {
                    $q->whereIn('categories.id', $request->categories);
                });
            })
            // Filter Brand (Asumsi brand masih One-to-Many dengan kolom brand_id di tabel products)
            ->when($request->filled('brands'), function ($query) use ($request) {
                $query->whereIn('brand_id', $request->brands);
            })
            // Eager load relasi untuk menghindari N+1 problem jika Anda menampilkan nama kategori di view
            ->with(['categories'])
            ->paginate(12)
            ->withQueryString();

        

        return view('pages.products.index', compact('categories', 'brands', 'products'));
    }

    public function show(string $param1, $param2 = null)
    {
        $slug = $param2 ? $param2 : $param1;

        $product = Product::where('slug', $slug)->firstOrFail();
        $otherProducts = Product::whereNot('id', $product->id)->get();
        return view('pages.products.detail', compact('product', 'otherProducts'));
    }
}
