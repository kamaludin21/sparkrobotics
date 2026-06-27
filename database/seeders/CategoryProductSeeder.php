<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'Aircraft', 'slug' => 'aircraft'],
                    ['locale' => 'en', 'name' => 'Aircraft', 'slug' => 'aircraft'],
                ],
            ],
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'DJI Dock', 'slug' => 'dji-dock'],
                    ['locale' => 'en', 'name' => 'DJI Dock', 'slug' => 'dji-dock'],
                ],
            ],
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'Aksesori', 'slug' => 'aksesori'],
                    ['locale' => 'en', 'name' => 'Accessories', 'slug' => 'accessories'],
                ],
            ],
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'Payload', 'slug' => 'payload'],
                    ['locale' => 'en', 'name' => 'Payload', 'slug' => 'payload'],
                ],
            ],
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'Seri Humanoid', 'slug' => 'seri-humanoid'],
                    ['locale' => 'en', 'name' => 'Humanoid Series', 'slug' => 'humanoid-series'],
                ],
            ],
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'Seri Quadruped', 'slug' => 'seri-quadruped'],
                    ['locale' => 'en', 'name' => 'Quadruped Series', 'slug' => 'quadruped-series'],
                ],
            ],
            [
                'translations' => [
                    ['locale' => 'id', 'name' => 'Perangkat Lunak & Ekosistem', 'slug' => 'perangkat-lunak-ekosistem'],
                    ['locale' => 'en', 'name' => 'Software & Ecosystem', 'slug' => 'software-ecosystem'],
                ],
            ],
        ];

        foreach ($data as $item) {
            $category = Category::create();

            foreach ($item['translations'] as $translation) {
                CategoryTranslation::create([
                    'category_id' => $category->id,
                    'locale'      => $translation['locale'],
                    'name'        => $translation['name'],
                    'slug'        => $translation['slug'],
                ]);
            }
        }
    }
}
