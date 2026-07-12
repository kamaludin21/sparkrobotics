<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                'article_category_id' => rand(1, 5),
                'image' => null,
                'en' => [
                    'title'   => 'How Drone Technology is Revolutionizing Topographic Surveys',
                    'slug'    => 'how-drone-technology-revolutionizing-topographic-surveys',
                    'content' => '
                        <p>The landscape of topographic surveys has undergone a dramatic transformation with the advent of drone technology. Traditional surveying methods often required significant time, manpower, and resources.</p>
                        
                        <h2>The Shift to Aerial Surveying</h2>
                        <p>Modern drones equipped with high-resolution cameras and LiDAR sensors can capture detailed topographic data in a fraction of the time.</p>
                        
                        <h2>Key Advantages</h2>
                        <ul>
                            <li><strong>Speed:</strong> Cover up to 100 hectares per day</li>
                            <li><strong>Accuracy:</strong> Achieve centimeter-level precision</li>
                            <li><strong>Safety:</strong> Eliminate the need to enter hazardous terrain</li>
                            <li><strong>Cost-Effective:</strong> Reduce project costs by up to 60%</li>
                        </ul>
                    ',
                ],
                'id' => [
                    'title'   => 'Bagaimana Teknologi Drone Merevolusi Survei Topografi',
                    'slug'    => 'teknologi-drone-revolusi-survei-topografi',
                    'content' => '
                        <p>Lanskap survei topografi telah mengalami transformasi dramatis dengan hadirnya teknologi drone. Metode survei tradisional seringkali membutuhkan waktu dan sumber daya yang signifikan.</p>
                        
                        <h2>Pergeseran ke Survei Udara</h2>
                        <p>Drone modern yang dilengkapi kamera beresolusi tinggi dan sensor LiDAR dapat menangkap data topografi terperinci dalam waktu singkat.</p>
                        
                        <h2>Keunggulan Utama</h2>
                        <ul>
                            <li><strong>Kecepatan:</strong> Mampu menjangkau hingga 100 hektar per hari</li>
                            <li><strong>Akurasi:</strong> Mencapai presisi tingkat sentimeter</li>
                            <li><strong>Keselamatan:</strong> Tidak perlu memasuki medan berbahaya</li>
                            <li><strong>Hemat Biaya:</strong> Mengurangi biaya proyek hingga 60%</li>
                        </ul>
                    ',
                ],
                'tags' => [],
            ],

            [
                'article_category_id' => rand(1, 5),
                'image' => null,
                'en' => [
                    'title'   => 'Understanding LiDAR: A Complete Guide for Mining Industry',
                    'slug'    => 'understanding-lidar-complete-guide-mining-industry',
                    'content' => '
                        <p>LiDAR (Light Detection and Ranging) has become an indispensable tool in the mining industry. This technology uses laser pulses to create precise 3D models of terrain.</p>
                        
                        <h2>How LiDAR Works</h2>
                        <p>A LiDAR system emits rapid laser pulses and measures the time for each pulse to bounce back, generating highly accurate point clouds.</p>
                        
                        <h2>Applications in Mining</h2>
                        <ul>
                            <li>Volume calculations for stockpiles and pits</li>
                            <li>Slope stability monitoring</li>
                            <li>Drill and blast planning</li>
                            <li>Rehabilitation monitoring</li>
                        </ul>
                    ',
                ],
                'id' => [
                    'title'   => 'Memahami LiDAR: Panduan Lengkap untuk Industri Pertambangan',
                    'slug'    => 'memahami-lidar-panduan-lengkap-industri-pertambangan',
                    'content' => '
                        <p>LiDAR (Light Detection and Ranging) telah menjadi alat penting di industri pertambangan. Teknologi ini menggunakan pulsa laser untuk membuat model 3D yang presisi.</p>
                        
                        <h2>Cara Kerja LiDAR</h2>
                        <p>Sistem LiDAR memancarkan pulsa laser secara cepat dan mengukur waktu pantulan, menghasilkan point cloud yang sangat akurat.</p>
                        
                        <h2>Aplikasi di Pertambangan</h2>
                        <ul>
                            <li>Perhitungan volume tumpukan material dan pit</li>
                            <li>Pemantauan stabilitas lereng</li>
                            <li>Perencanaan pengeboran dan peledakan</li>
                            <li>Pemantauan rehabilitasi</li>
                        </ul>
                    ',
                ],
                'tags' => [],
            ],

            [
                'article_category_id' => rand(1, 5),
                'image' => null,
                'en' => [
                    'title'   => 'SPARK Monitoring Partners with Leading Mining Company',
                    'slug'    => 'spark-monitoring-partners-leading-mining-company',
                    'content' => '
                        <p>We are excited to announce a new partnership with one of Indonesia\'s leading mining companies for comprehensive land surveys.</p>
                        
                        <h2>Project Scope</h2>
                        <p>The project encompasses over 5,000 hectares requiring detailed topographic mapping and slope monitoring.</p>
                        
                        <blockquote>"This partnership demonstrates the growing trust in drone-based surveying solutions," said our CEO.</blockquote>
                    ',
                ],
                'id' => [
                    'title'   => 'SPARK Monitoring Bermitra dengan Perusahaan Tambang Terkemuka',
                    'slug'    => 'spark-monitoring-bermitra-perusahaan-tambang-terkemuka',
                    'content' => '
                        <p>Kami mengumumkan kemitraan baru dengan salah satu perusahaan tambang terkemuka di Indonesia untuk survei lahan komprehensif.</p>
                        
                        <h2>Ruang Lingkup Proyek</h2>
                        <p>Proyek ini mencakup lebih dari 5.000 hektar yang membutuhkan pemetaan topografi dan pemantauan lereng.</p>
                        
                        <blockquote>"Kemitraan ini menunjukkan kepercayaan yang semakin tumbuh terhadap solusi survei berbasis drone," ujar CEO kami.</blockquote>
                    ',
                ],
                'tags' => [],
            ],

            [
                'article_category_id' => rand(1, 5),
                'image' => null,
                'en' => [
                    'title'   => 'Construction Progress Monitoring: Why Aerial Data Matters',
                    'slug'    => 'construction-progress-monitoring-aerial-data-matters',
                    'content' => '
                        <p>Effective construction progress monitoring is crucial for project success. Aerial data provides stakeholders with objective, measurable insights.</p>
                        
                        <h2>Benefits of Aerial Monitoring</h2>
                        <ul>
                            <li>Weekly or bi-weekly progress documentation</li>
                            <li>Accurate earthwork volume tracking</li>
                            <li>Dispute resolution with visual evidence</li>
                            <li>Improved communication between parties</li>
                        </ul>
                    ',
                ],
                'id' => [
                    'title'   => 'Pemantauan Progres Konstruksi: Mengapa Data Udara Penting',
                    'slug'    => 'pemantauan-progres-konstruksi-data-udara-penting',
                    'content' => '
                        <p>Pemantauan progres konstruksi yang efektif sangat penting untuk keberhasilan proyek. Data udara memberikan wawasan objektif dan terukur.</p>
                        
                        <h2>Manfaat Pemantauan Udara</h2>
                        <ul>
                            <li>Dokumentasi progres mingguan atau dwimingguan</li>
                            <li>Pelacakan volume pekerjaan tanah yang akurat</li>
                            <li>Penyelesaian sengketa dengan bukti visual</li>
                            <li>Komunikasi yang lebih baik antar pihak</li>
                        </ul>
                    ',
                ],
                'tags' => [],
            ],

            [
                'article_category_id' => rand(1, 5),
                'image' => null,
                'en' => [
                    'title'   => 'Photogrammetry vs LiDAR: Choosing the Right Technology',
                    'slug'    => 'photogrammetry-vs-lidar-choosing-right-technology',
                    'content' => '
                        <p>Both photogrammetry and LiDAR are powerful technologies, but choosing the right one depends on your specific project requirements.</p>
                        
                        <h2>Photogrammetry</h2>
                        <p>Best for visual mapping, 3D modeling, and projects requiring high-resolution imagery. More cost-effective for large areas.</p>
                        
                        <h2>LiDAR</h2>
                        <p>Ideal for penetrating vegetation, accurate ground surface mapping, and projects in dense forest areas. Higher cost but superior ground accuracy.</p>
                        
                        <h2>When to Use Both</h2>
                        <p>For critical mining and infrastructure projects, combining both technologies provides the most comprehensive dataset.</p>
                    ',
                ],
                'id' => [
                    'title'   => 'Fotogrametri vs LiDAR: Memilih Teknologi yang Tepat',
                    'slug'    => 'fotogrametri-vs-lidar-memilih-teknologi-tepat',
                    'content' => '
                        <p>Fotogrametri dan LiDAR sama-sama teknologi yang powerful, namun memilih yang tepat tergantung kebutuhan proyek Anda.</p>
                        
                        <h2>Fotogrametri</h2>
                        <p>Cocok untuk pemetaan visual, pemodelan 3D, dan proyek yang membutuhkan gambar beresolusi tinggi. Lebih hemat biaya untuk area luas.</p>
                        
                        <h2>LiDAR</h2>
                        <p>Ideal untuk menembus vegetasi, pemetaan permukaan tanah akurat, dan proyek di area hutan lebat. Biaya lebih tinggi tapi akurasi tanah lebih unggul.</p>
                        
                        <h2>Kapan Menggunakan Keduanya</h2>
                        <p>Untuk proyek pertambangan dan infrastruktur kritis, menggabungkan kedua teknologi memberikan dataset paling komprehensif.</p>
                    ',
                ],
                'tags' => [],
            ],
        ];

        foreach ($articles as $data) {
            $tags = $data['tags'] ?? [];

            // Pisahkan data utama dan data terjemahan
            $enTranslation = $data['en'];
            $idTranslation = $data['id'];

            unset($data['tags'], $data['en'], $data['id']);

            // 1. Insert ke tabel utama (articles)
            $articleId = DB::table('articles')->insertGetId([
                'article_category_id' => $data['article_category_id'],
                'image'               => $data['image'],
                'created_at'          => now(),
                'updated_at'          => now(),
            ]);

            // 2. Insert ke tabel terjemahan (article_translations)
            DB::table('article_translations')->insert([
                [
                    'article_id' => $articleId,
                    'locale'     => 'en',
                    'title'      => $enTranslation['title'],
                    'slug'       => $enTranslation['slug'],
                    'content'    => $enTranslation['content'],
                ],
                [
                    'article_id' => $articleId,
                    'locale'     => 'id',
                    'title'      => $idTranslation['title'],
                    'slug'       => $idTranslation['slug'],
                    'content'    => $idTranslation['content'],
                ],
            ]);

            // 3. Handle relasi tags (jika ada)
            if (!empty($tags)) {
                // Karena tabel pivot biasanya butuh Eloquent untuk menangani event/relasi dengan benar
                Article::find($articleId)->tags()->attach($tags);
            }
        }
    }
}
