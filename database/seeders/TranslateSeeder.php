<?php

namespace Database\Seeders;

use App\Models\Translation;
use Illuminate\Database\Seeder;

class TranslateSeeder extends Seeder
{
    public function run(): void
    {
        $translations = [
            ['key' => 'home_title', 'lang_id' => 'Reseller Resmi DJI & Unitree', 'lang_en' => 'Authorized Reseller of DJI & Unitree'],
            ['key' => 'home_cta_tagline', 'lang_id' => 'Keahlian Bertemu Keunggulan', 'lang_en' => 'Expertise Meets Excellence'],
            ['key' => 'home_cta_contact', 'lang_id' => 'Hubungi Kami', 'lang_en' => 'Contact Us'],
            ['key' => 'home_cta_catalogs', 'lang_id' => 'Lihat Katalog', 'lang_en' => 'See Catalogs'],
            ['key' => 'brand_spark_robotics', 'lang_id' => 'SPARK Robotics', 'lang_en' => 'SPARK Robotics'],
            ['key' => 'segment_subtitle', 'lang_id' => 'Segmen Produk', 'lang_en' => 'Product Segments'],
            ['key' => 'segment_title', 'lang_id' => 'Beragam Pilihan Robot dan Drone', 'lang_en' => 'A Wide Range of Robots and Drones'],
            ['key' => 'segment_dji_title', 'lang_id' => 'PERLUASAN EKOSISTEM DJI', 'lang_en' => 'DJI ECOSYSTEM EXPANSION'],
            ['key' => 'segment_dji_description', 'lang_id' => 'Dengan misi untuk mempromosikan keterbukaan teknologi, Ekosistem Perusahaan DJI bertujuan untuk mendorong lebih banyak pengembang bergabung, mendorong industri drone maju demi kepentingan semua pihak', 'lang_en' => 'With a mission to promote technological openness, the DJI Enterprise Ecosystem aims to encourage more developers to join, driving the drone industry forward for the benefit of all'],
            ['key' => 'segment_ecosystem_slogan', 'lang_id' => 'Kami memiliki ekosistem mitra dan solusi yang kuat', 'lang_en' => 'We have a strong ecosystem of partners and solutions'],
            ['key' => 'segment_unitree_title', 'lang_id' => 'UNITREE ECOSYSTEM', 'lang_en' => 'UNITREE ECOSYSTEM'],
            ['key' => 'segment_title_first', 'lang_id' => 'FLIGHT PLATFORM', 'lang_en' => 'FLIGHT PLATFORM'],
            ['key' => 'segment_title_second', 'lang_id' => 'Payloads', 'lang_en' => 'Payloads'],
            ['key' => 'segment_title_third', 'lang_id' => 'Unitree Ecosystem', 'lang_en' => 'Unitree Ecosystem'],
            ['key' => 'productsIndex_title', 'lang_id' => 'Produk', 'lang_en' => 'Products'],
            ['key' => 'productsIndex_subtitle', 'lang_id' => 'Beragam Pilihan Produk', 'lang_en' => 'A Diverse Range of Products'],
            ['key' => 'productsIndex_btn_more', 'lang_id' => 'Jelajahi Lebih Lanjut', 'lang_en' => 'Explore More'],
            ['key' => 'productsIndex_detail_button', 'lang_id' => 'Lihat Detail', 'lang_en' => 'See Detail'],
            ['key' => 'chooseUs_title', 'lang_id' => 'Mengapa Memilih Kami', 'lang_en' => 'Why Choose Us'],
            ['key' => 'chooseUs_subtitle', 'lang_id' => 'Kenapa Spark Robotics adalah Pilihan Tepat untuk Anda', 'lang_en' => 'Why Spark Robotics is The Right Choice for You'],
            ['key' => 'chooseUs_distributor', 'lang_id' => 'Distributor Resmi', 'lang_en' => 'Official Distributor'],
            ['key' => 'chooseUs_genuine', 'lang_id' => 'Produk original bergaransi resmi dan didukung langsung oleh pabrikan', 'lang_en' => 'Genuine products with official warranty and manufacturer support'],
            ['key' => 'chooseUs_solutions', 'lang_id' => 'Solusi Menyeluruh (End-to-End)', 'lang_en' => 'End-to-End Solutions'],
            ['key' => 'chooseUs_solutions_description', 'lang_id' => 'Kebutuhan drone, robotik, GNSS, software, pelatihan, hingga layanan teknis, semua tersedia dalam satu atap', 'lang_en' => 'Drones, robotics, GNSS, software, training, and technical services in one place'],
            ['key' => 'chooseUs_support', 'lang_id' => 'Dukungan Tim Ahli Lokal', 'lang_en' => 'Expert Local Support'],
            ['key' => 'chooseUs_support_description', 'lang_id' => 'Layanan konsultasi, implementasi, hingga after-sales yang responsif di seluruh Indonesia. Kami memastikan tim Anda benar-benar siap pakai dan mendapat pendampingan penuh', 'lang_en' => 'Consultation, implementation, and responsive after-sales service across Indonesia. We ensure your team is fully equipped and supported'],
            ['key' => 'chooseUs_industries', 'lang_id' => 'Dipercaya oleh Berbagai Industri Terkemuka', 'lang_en' => 'Trusted by Leading Industries'],
            ['key' => 'chooseUs_industries_description', 'lang_id' => 'Rekam jejak nyata dalam menghadirkan solusi yang berdampak besar bagi sektor pertambangan, energi, konstruksi, hingga pemerintahan', 'lang_en' => 'Proven experience delivering high-impact solutions for mining, energy, construction, and public sectors'],
            ['key' => 'chooseUs_btn_projects', 'lang_id' => 'Lihat Portofolio Kami', 'lang_en' => 'View Our Projects'],
            ['key' => 'chooseUs_brand', 'lang_id' => 'Merek Global Terpercaya', 'lang_en' => 'Trusted Global Brands'],
            ['key' => 'companyIndex_title', 'lang_id' => 'Siapa Kami & Solusi Kami', 'lang_en' => 'Who We Are & Our Solutions'],
            ['key' => 'companyIndex_subtitle', 'lang_id' => 'SPARK Robotics adalah perusahaan teknologi yang didirikan di Indonesia oleh para pengusaha asal Tiongkok. Perusahaan ini berperan sebagai distributor resmi untuk teknologi canggih asal Tiongkok termasuk drone kelas enterprise DJI dan produk robotika Unitree di pasar Indonesia. Berbekal pengalaman bertahun-tahun di Indonesia, SPARK Robotics telah membangun kemampuan layanan serta dukungan teknis lokal yang tangguh untuk berbagai sektor industri', 'lang_en' => 'SPARK Robotics is a representative technology company founded in Indonesia by Chinese entrepreneurs. The company serves as an authorized distributor of advanced Chinese technologies, including DJI enterprise drones and Unitree robotics products, in the Indonesian market. With years of experience in Indonesia, SPARK Robotics has developed strong localized service and technical support capabilities across industries'],
            ['key' => 'blogIndex_title', 'lang_id' => 'Berita', 'lang_en' => 'News'],
            ['key' => 'blogIndex_subtitle', 'lang_id' => 'Rilis terbaru', 'lang_en' => 'Recent release'],
            ['key' => 'blogIndex_btn_more', 'lang_id' => 'Lihat selengkapnya', 'lang_en' => 'See More'],
            ['key' => 'ctaIndex_title', 'lang_id' => 'Siap Meningkatkan Pengalaman Robotika dan Drone Anda?', 'lang_en' => 'Ready to Elevate Your Robotics and Drones Experience?'],
            ['key' => 'ctaIndex_subtitle', 'lang_id' => 'Hubungi kami hari ini untuk mengetahui bagaimana produk kami dapat mentransformasi operasional dan mendorong inovasi Anda', 'lang_en' => 'Contact us today to discover how our products can transform your operations and drive innovation'],
            ['key' => 'ctaIndex_btn_contact', 'lang_id' => 'Hubungi Kami', 'lang_en' => 'Contact Us'],
            ['key' => 'ctaIndex_btn_more', 'lang_id' => 'Jelajahi Katalog', 'lang_en' => 'Explore Catalogs'],
            ['key' => 'productsPage_title_page', 'lang_id' => 'Katalog Produk', 'lang_en' => 'Products Catalog'],
            ['key' => 'productsPage_subtitle_page', 'lang_id' => 'Eksplorasi solusi drone enterprise, payload, dan perangkat lunak skema.', 'lang_en' => 'Explore enterprise drone solutions, payloads, and software'],
            ['key' => 'productsPage_filter_category', 'lang_id' => 'Berdasarkan Kategori', 'lang_en' => 'By Categories'],
            ['key' => 'productsPage_filter_brand', 'lang_id' => 'Berdasarkan Brand', 'lang_en' => 'By Brand'],
            ['key' => 'productsPage_detail_button', 'lang_id' => 'Selengkapnya', 'lang_en' => 'More Detail'],
            ['key' => 'productsPage_search_input', 'lang_id' => 'Temukan produk', 'lang_en' => 'Find products'],
            ['key' => 'productsPage_other_section', 'lang_id' => 'Produk Lainnya', 'lang_en' => 'Other Products'],
            ['key' => 'solutionsPage_title', 'lang_id' => 'Solusi dan Layanan', 'lang_en' => 'Solutions and Services'],
            ['key' => 'solutionsPage_subtitle', 'lang_id' => 'Solusi komprehensif kami memanfaatkan teknologi UAV, LiDAR, dan fotogrametri terdepan untuk menghadirkan akurasi dan efisiensi maksimal pada setiap tahap proyek industri Anda.', 'lang_en' => 'Our comprehensive solutions leverage cutting-edge UAV, LiDAR, and photogrammetry technologies to deliver maximum accuracy and efficiency at every stage of your industrial project.'],
            ['key' => 'solutionsPage_btn_contact', 'lang_id' => 'Konsultasi Sekarang', 'lang_en' => 'Consult Now'],
        ];

        foreach ($translations as $translation) {
            Translation::create($translation);
        }
    }
}
