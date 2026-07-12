<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            ['name' => 'DJI Enterprise', 'slug' => 'dji-enterprise', 'logo_path' => null, 'website' => 'https://enterprise.dji.com'],
            ['name' => 'Unitree', 'slug' => 'unitree', 'logo_path' => null, 'website' => 'https://www.unitree.com'],
        ];

        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
