<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['title' => 'News', 'slug' => 'news'],
            ['title' => 'Blog', 'slug' => 'blog'],
            ['title' => 'Product', 'slug' => 'product'],
            ['title' => 'Announcements', 'slug' => 'announcements'],
            ['title' => 'Tutorial', 'slug' => 'tutorial'],
        ];

        foreach ($categories as $category) {
            ArticleCategory::create([
                'title' => $category['title'],
                'slug' => $category['slug'],
            ]);
        }
    }
}
