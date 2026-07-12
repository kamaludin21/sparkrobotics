<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // =============================================
        // HERO SECTION
        // =============================================
        $this->migrator->add('company.tagline_id', 'Keahlian Berpadu dengan Keunggulan');
        $this->migrator->add('company.company_name_id', 'SPARK Robotics');
        $this->migrator->add('company.designation_id', 'Reseller Resmi DJI Enterprise dan Unitree');
        $this->migrator->add('company.description_id', 'Distributor resmi teknologi DJI Enterprise dan Unitree Robotics di Indonesia. Menghadirkan efisiensi melalui automasi udara dan darat');

        $this->migrator->add('company.tagline_en', 'Expertise Meets Excellence');
        $this->migrator->add('company.company_name_en', 'SPARK Robotics');
        $this->migrator->add('company.designation_en', 'Authorized Reseller of DJI Enterprise and Unitree');
        $this->migrator->add('company.description_en', 'Official distributor of DJI Enterprise and Unitree Robotics technology in Indonesia. Delivering efficiency through aerial and ground automation.');

        // =============================================
        // SIAPA KAMI SECTION
        // =============================================
        $this->migrator->add('company.about_image', []);
        $this->migrator->add('company.section_title_id', 'Siapa Kami?');
        $this->migrator->add('company.about_id', 'SPARK Robotics adalah perusahaan teknologi yang didirikan di Indonesia oleh para pengusaha asal Tiongkok. Perusahaan ini berperan sebagai distributor resmi untuk teknologi canggih asal Tiongkok, termasuk drone kelas enterprise DJI dan produk robotika Unitree di pasar Indonesia.    ');
        $this->migrator->add('company.section_title_en', 'Who We Are?');
        $this->migrator->add('company.about_en', 'SPARK Robotics is a representative technology company founded in Indonesia by Chinese entrepreneurs. The company serves as an authorized distributor of advanced Chinese technologies, including DJI enterprise drones and Unitree robotics products, in the Indonesian market.');

        // =============================================
        // INDUSTRI YANG KAMI DUKUNG
        // =============================================
        $this->migrator->add('company.industries_title_id', 'Industri yang Kami Dukung');
        $this->migrator->add('company.industries_subtitle_id', 'Kami menyediakan solusi terintegrasi yang disesuaikan untuk memenuhi tantangan dan kebutuhan operasional di berbagai sektor industri krusial');
        $this->migrator->add('company.industries_title_en', 'Industries We Support');
        $this->migrator->add('company.industries_subtitle_en', 'Kami menyediakan solusi terintegrasi yang disesuaikan untuk memenuhi tantangan dan kebutuhan operasional di berbagai sektor industri krusial');

        $this->migrator->add('company.industries', [
            [
                'industries_name_id' => 'Pertambangan',
                'industries_name_en' => 'Mining',
            ],
            [
                'industries_name_id' => 'Konstruksi',
                'industries_name_en' => 'Construction',
            ],
            [
                'industries_name_id' => 'Pertanian',
                'industries_name_en' => 'Agriculture',
            ],
            [
                'industries_name_id' => 'Kehutanan',
                'industries_name_en' => 'Forestry',
            ],
            [
                'industries_name_id' => 'Energi',
                'industries_name_en' => 'Energy',
            ],
            [
                'industries_name_id' => 'Keamanan',
                'industries_name_en' => 'Security',
            ],
            [
                'industries_name_id' => 'Pemetaan',
                'industries_name_en' => 'Mapping',
            ],
            [
                'industries_name_id' => 'Infrastruktur',
                'industries_name_en' => 'Infrastructure',
            ],
        ]);

        // =============================================
        // DIPERCAYA OLEH
        // =============================================
        $this->migrator->add('company.brand_title_id', 'Dipercaya Oleh');
        $this->migrator->add('company.brand_subtitle_id', 'Hingga saat ini, SPARK Robotics telah memberikan layanan dan solusi terbaik kepada berbagai organisasi terkemuka yang beroperasi di Indonesia');
        $this->migrator->add('company.brand_title_en', 'Trusted By');
        $this->migrator->add('company.brand_subtitle_en', 'To date, SPARK Robotics has provided top-tier services and solutions to various leading organizations operating in Indonesia.');
        $this->migrator->add('company.clients', []);
    }
};
