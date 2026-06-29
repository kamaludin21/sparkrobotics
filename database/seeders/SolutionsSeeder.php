<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Solution::create([
            'images' => [],

            'en' => [
                'title'       => 'Engineering Monitoring',
                'description' => 'Our comprehensive solution for all terrain mapping needs...',
                'list_title'  => 'Services Scope',
            ],
            'id' => [
                'title'       => 'Pemantauan Teknis',
                'description' => 'Solusi komprehensif kami menjawab segala kebutuhan pemetaan medan...',
                'list_title'  => 'Lingkup Layanan',
            ],

            'list_items' => [
                'en' => [
                    ["title" => "Topographic Survey", "subtitle" => null],
                    ["title" => "Asset and Inventory Monitoring", "subtitle" => "Generate a visual database for real-time project asset status."],
                    ["title" => "Construction Progress Monitoring", "subtitle" => "Track project progress with high-resolution aerial views."],
                    ["title" => "Volume Calculation", "subtitle" => "Accurately estimate inventory and material calculations in the field."],
                    ["title" => "Analisis Cut-and-Fill", "subtitle" => "Ground elevation mapping for dredging and filling operations."],
                    ["title" => "Slope Monitoring", "subtitle" => "Analyzing the stability and movement of slopes in mining areas or on cliffs."]
                ],
                'id' => [
                    ["title" => "Survei Topografi", "subtitle" => null],
                    ["title" => "Pemantauan Aset dan Inventaris", "subtitle" => "Menghasilkan database visual untuk status aset proyek real-time."],
                    ["title" => "Pemantauan Kemajuan Konstruksi", "subtitle" => "Pantau kemajuan proyek dengan tampilan udara beresolusi tinggi."],
                    ["title" => "Perhitungan Volume", "subtitle" => "Memperkirakan perhitungan inventaris dan material secara akurat di lapangan."],
                    ["title" => "Analisis Cut-and-Fill", "subtitle" => "Pemetaan elevasi permukaan tanah untuk operasi pengerukan dan pengurukan."],
                    ["title" => "Pemantauan Lereng", "subtitle" => "Menganalisis keamanan dan pergerakan lereng di area tambang atau tebing."]
                ],
            ],
        ]);
    }
}
