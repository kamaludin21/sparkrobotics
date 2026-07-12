<?php

namespace Database\Seeders;

use App\Models\Solution;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolutionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $solutionId = DB::table('solutions')->insertGetId([
            'images' => json_encode([]),
        ]);

        DB::table('solution_translations')->insert([
            [
                'solution_id'  => $solutionId,
                'locale'       => 'en',
                'title'        => 'Engineering Monitoring',
                'description'  => 'Our comprehensive solution for all terrain mapping needs. SPARK Monitoring utilizes advanced photogrammetry and LiDAR technology to complete tasks such as topographic surveys, asset and inventory mapping, construction progress monitoring, inventory calculations, cut-and-fill analysis, and slope monitoring. Whether for architectural design needs or site studies, we provide high-resolution data',
                'list_title'   => 'Services Scope',
                'list_items'   => json_encode([
                    ['en' => ['title' => 'Topographic Survey', 'subtitle' => null]],
                    ['en' => ['title' => 'Asset and Inventory Monitoring', 'subtitle' => 'Generate a visual database for real-time project asset status.']],
                    ['en' => ['title' => 'Construction Progress Monitoring', 'subtitle' => 'Track project progress with high-resolution aerial views.']],
                    ['en' => ['title' => 'Volume Calculation', 'subtitle' => 'Accurately estimate inventory and material calculations in the field.']],
                    ['en' => ['title' => 'Analisis Cut-and-Fill', 'subtitle' => 'Ground elevation mapping for dredging and filling operations.']],
                    ['en' => ['title' => 'Slope Monitoring', 'subtitle' => 'Analyzing the stability and movement of slopes in mining areas or on cliffs.']],
                ]),
            ],
            [
                'solution_id'  => $solutionId,
                'locale'       => 'id',
                'title'        => 'Pemantauan Teknis',
                'description'  => 'Solusi komprehensif kami menjawab segala kebutuhan pemetaan medan. SPARK Monitoring memanfaatkan teknologi fotogrametri dan LiDAR mutakhir untuk melaksanakan berbagai tugas, seperti survei topografi, pemetaan aset dan inventaris, pemantauan progres konstruksi, penghitungan inventaris, analisis *cut-and-fill*, serta pemantauan kemiringan lereng. Baik untuk keperluan desain arsitektur maupun studi lokasi, kami menyediakan data beresolusi tinggi.',
                'list_title'   => 'Lingkup Layanan',
                'list_items'   => json_encode([
                    ['id' => ['title' => 'Survei Topografi', 'subtitle' => null]],
                    ['id' => ['title' => 'Pemantauan Aset dan Inventaris', 'subtitle' => 'Menghasilkan database visual untuk status aset proyek real-time.']],
                    ['id' => ['title' => 'Pemantauan Kemajuan Konstruksi', 'subtitle' => 'Pantau kemajuan proyek dengan tampilan udara beresolusi tinggi.']],
                    ['id' => ['title' => 'Perhitungan Volume', 'subtitle' => 'Memperkirakan perhitungan inventaris dan material secara akurat di lapangan.']],
                    ['id' => ['title' => 'Analisis Cut-and-Fill', 'subtitle' => 'Pemetaan elevasi permukaan tanah untuk operasi pengerukan dan pengurukan.']],
                    ['id' => ['title' => 'Pemantauan Lereng', 'subtitle' => 'Menganalisis keamanan dan pergerakan lereng di area tambang atau tebing.']],
                ]),
            ],
        ]);
    }
}
