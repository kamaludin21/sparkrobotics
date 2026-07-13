<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use App\Models\Product;

#[Signature('app:generate-sitemap')]
#[Description('Membangun sitemap.xml untuk seluruh halaman (Multibahasa)')]
class GenerateSitemap extends Command
{
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Memulai proses generate sitemap...');
        $sitemap = Sitemap::create();

        // ---------------------------------------------------------
        // 1. Tambahkan Halaman Statis
        // ---------------------------------------------------------

        // Beranda
        $sitemap->add(Url::create('/')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id')
            ->setPriority(1.0));

        // Product
        $sitemap->add(Url::create('/products')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id/produk')
            ->setPriority(1.0));

        // Solution
        $sitemap->add(Url::create('/solutions')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id/solusi')
            ->setPriority(1.0));

        // News
        $sitemap->add(Url::create('/news')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id/berita')
            ->setPriority(1.0));

        // Company
        $sitemap->add(Url::create('about-us')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id/tentang-kami')
            ->setPriority(1.0));

        // case-study
        $sitemap->add(Url::create('/about-us/case-study')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id/tentang-kami/studi-kasus')
            ->setPriority(1.0));

        // Contact
        $sitemap->add(Url::create('/about-us/contact')
            ->setPriority(1.0));
        $sitemap->add(Url::create('/id/tentang-kami/kontak')
            ->setPriority(1.0));

        // ---------------------------------------------------------
        // 2. Tambahkan Halaman Dinamis (Katalog Produk)
        // ---------------------------------------------------------

        // Kita ambil semua produk. Jika Anda punya status 'is_active', 
        // pastikan menggunakan scope seperti Product::where('is_active', true)->get();
        $products = Product::all();

        foreach ($products as $product) {
            // Karena slug tidak masuk dalam $translatedAttributes, 
            // kita ambil langsung dari model utama.
            $slug = $product->slug;

            // Mengambil waktu update terakhir agar Google tahu kapan konten berubah
            $lastModified = $product->updated_at;

            // URL Produk Bahasa Inggris
            $sitemap->add(Url::create("/products/{$slug}")
                ->setLastModificationDate($lastModified)
                ->setPriority(0.8));

            // URL Produk Bahasa Indonesia
            $sitemap->add(Url::create("/id/produk/{$slug}")
                ->setLastModificationDate($lastModified)
                ->setPriority(0.8));
        }

        // ---------------------------------------------------------
        // 3. Eksekusi Pembuatan File
        // ---------------------------------------------------------

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap.xml berhasil dibuat di folder public!');
    }
}
