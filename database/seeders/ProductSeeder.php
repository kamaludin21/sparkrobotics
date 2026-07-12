<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\ProductTranslation;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [

            // =============================================
            // 1. Unitree Go2
            // =============================================
            [
                'sort' => 0,
                'brand_id' => 2,
                'title' => 'Unitree Go2',
                'slug' => 'unitree-go2',
                'thumbnail_image' => 'products/thumbnail/01KXBP0MQNDC1GH9EXA70PQVCF.webp',
                'hero_media_type' => 'image',
                'hero_image_path' => 'products/hero_images/01KXBP0KH6F2495X8WN9NB10QG.webp',
                'hero_youtube_url' => null,
                'showcase_images' => [
                    'products/showcase_images/01KXBP0N058FJHXE6YP3S1M86H.webp',
                    'products/showcase_images/01KXBP0NT18YH1PRR4QR0DCZ0D.webp',
                    'products/showcase_images/01KXBP0P0NX7RW0NWPV1EGP84D.webp',
                    'products/showcase_images/01KXBP0P6ZFJTFYAEGMYFY4DVH.webp',
                ],
                'features_images' => [
                    'products/features_images/01KXBP0PD61VBXXBAK1ERJ6SNB.webp',
                    'products/features_images/01KXBP0QJJ7088YANFGV5ZMJJC.webp',
                    'products/features_images/01KXBP0QY1FG7Q7PM695WFHSFB.webp',
                    'products/features_images/01KXBP0R9J9GGRTJ1P289916RX.webp',
                ],
                'datasheet_file_path' => 'products/documents/01KXBPAHKD4Q7YMKDH6EBSKGC7.pdf',
                'specifications' => [
                    [
                        'title' => 'Mechanical and Physical',
                        'items' => [
                            ['label' => 'Dimensions', 'value' => '(H x W x D)'],
                            ['label' => 'Total Weight', 'value' => '45 kg'],
                            ['label' => 'Degrees of Freedom (DoF)', 'value' => '32 DoF Total'],
                            ['label' => 'Actuator Type', 'value' => 'Quasi-Direct Drive (QDD)'],
                        ],
                    ],
                    [
                        'title' => 'Electrical and Power',
                        'items' => [
                            ['label' => 'Operating Voltage', 'value' => '48V DC Nominal'],
                            ['label' => 'Battery Type', 'value' => 'Li-ion 12S 20Ah Swappable'],
                            ['label' => 'Continuous Running Time', 'value' => '± 4.5 Hours'],
                        ],
                    ],
                    [
                        'title' => 'Sensor and System',
                        'items' => [
                            ['label' => 'Vision System', 'value' => '2x RGB-D Intel RealSense'],
                            ['label' => 'Lidar', 'value' => '360° 3D Lidar (100m Range)'],
                            ['label' => 'Main Processor', 'value' => 'NVIDIA Jetson Orin AGX'],
                        ],
                    ],
                ],
                'created_at' => '2026-07-12 17:29:22',
                'updated_at' => '2026-07-12 17:34:42',
                'translations' => [
                    [
                        'locale' => 'en',
                        'title_section' => 'New Creature of Embodied AI Unitree Go2',
                        'subtitle_section' => 'Infinite Revolution',
                        'content' => '<p>Through large-scale AI simulation training, the Go2 robot has learned advanced gaits such as upside-down walking, adaptive roll-over, and climbing over obstacles, with excellent flexibility and stability at the same time.</p>',
                    ],
                    [
                        'locale' => 'id',
                        'title_section' => 'Makhluk Baru dari AI Unitree Go2 yang Terwujud',
                        'subtitle_section' => 'Revolusi Tanpa Batas',
                        'content' => '<p>Melalui pelatihan simulasi AI skala besar, robot Go2 telah mempelajari gerakan-gerakan canggih seperti berjalan terbalik, berguling adaptif, dan memanjat rintangan, dengan fleksibilitas dan stabilitas yang sangat baik secara bersamaan</p>',
                    ],
                ],
            ],

            // =============================================
            // 2. DJI Dock 3
            // =============================================
            [
                'sort' => 0,
                'brand_id' => 1,
                'title' => 'DJI Dock 3',
                'slug' => 'dji-dock-3',
                'thumbnail_image' => 'products/thumbnail/01KXBPMHMG74H9BE5BRD1F36PB.webp',
                'hero_media_type' => 'image',
                'hero_image_path' => 'products/hero_images/01KXBPMH10QKCY2S7NHQEP473C.webp',
                'hero_youtube_url' => null,
                'showcase_images' => [
                    'products/showcase_images/01KXBPMKRJ7MX24APPPC37SXWG.webp',
                    'products/showcase_images/01KXBPMNFBG8YJGNJ108EFRSV0.webp',
                    'products/showcase_images/01KXBPMQE5GXDDDGM9V03DSKV8.webp',
                    'products/showcase_images/01KXBPMQN3G0EH8P7N6V3MXGJR.webp',
                    'products/showcase_images/01KXBPMRA1DJAZGERY8DHXAQTH.webp',
                ],
                'features_images' => [
                    'products/features_images/01KXBPMTEFB1EX29EBYNK94C8M.webp',
                    'products/features_images/01KXBPMTMBBXJY9DH0H5VMYFBR.webp',
                ],
                'datasheet_file_path' => 'products/documents/01KXBPMHMB1V8TD0PYW28D1K5G.pdf',
                'specifications' => [
                    [
                        'title' => 'General',
                        'items' => [
                            ['label' => 'Total Weight', 'value' => '55 kg (without aircraft)'],
                            ['label' => 'Input Voltage', 'value' => '100-240 V (AC), 50/60 Hz'],
                            ['label' => 'Operating Temperature', 'value' => '-30° to 50° C (-22° to 122° F)'],
                        ],
                    ],
                    [
                        'title' => 'Video Transmission',
                        'items' => [
                            ['label' => 'Operating Frequency', 'value' => '2.400-2.4835 GHz 5.150-5.250 GHz (CE: 5.170-5.250 GHz) 5.725-5.850 GHz'],
                            ['label' => 'Antenna', 'value' => 'Built-in 9 antennas, 2T4R, supports intelligent switching'],
                            ['label' => 'Transmitter Power (EIRP)', 'value' => '2.4 GHz: < 33 dBm (FCC), < 20 dBm (CE/SRRC/MIC)'],
                        ],
                    ],
                ],
                'created_at' => '2026-07-12 17:40:19',
                'updated_at' => '2026-07-12 17:40:19',
                'translations' => [
                    [
                        'locale' => 'en',
                        'title_section' => 'Rise to Any Challenge',
                        'subtitle_section' => 'DJI\'s First Dock Adaptable for Vehicle Mounting',
                        'content' => '<p>Equipped with Matrice 4D or Matrice 4TD high-performance drones, DJI Dock 3 empowers 24/7 remote operations and, for the first time, supports mobile vehicle-mounted deployment, effortlessly adapting to various environments. The drones utilize the same cameras as the Matrice 4 Series but offer improved flight and protection performance. They can also pair with DJI RC Plus 2 Enterprise for standalone use. With DJI FlightHub 2\'s intelligent features, pilots can significantly cut down on operational time and labor costs, maximizing efficiency and savings.</p>',
                    ],
                    [
                        'locale' => 'id',
                        'title_section' => 'Rise to Any Challenge',
                        'subtitle_section' => 'Dock Pertama DJI yang Dapat Dipasang pada Kendaraan',
                        'content' => '<p>Dilengkapi dengan drone berkinerja tinggi Matrice 4D atau Matrice 4TD, DJI Dock 3 memungkinkan operasi jarak jauh selama 24 jam sehari, 7 hari seminggu, serta untuk pertama kalinya mendukung penerapan berbasis kendaraan bergerak yang mampu beradaptasi dengan mudah di berbagai lingkungan. Drone ini menggunakan kamera yang sama dengan seri Matrice 4 namun menawarkan peningkatan performa penerbangan dan perlindungan. Drone ini juga dapat dipasangkan dengan DJI RC Plus 2 Enterprise untuk penggunaan secara mandiri. Berkat fitur-fitur cerdas DJI FlightHub 2, pilot dapat memangkas waktu operasional dan biaya tenaga kerja secara signifikan, sehingga memaksimalkan efisiensi dan penghematan.</p>',
                    ],
                ],
            ],

            // =============================================
            // 3. DJI Matrice 400
            // =============================================
            [
                'sort' => 0,
                'brand_id' => 1,
                'title' => 'DJI Matrice 400',
                'slug' => 'dji-matrice-400',
                'thumbnail_image' => 'products/thumbnail/01KXBPY2R9B64FP08T2GS4YWAH.webp',
                'hero_media_type' => 'image',
                'hero_image_path' => 'products/hero_images/01KXBPY28CKMKK9CWX40TTF8SG.webp',
                'hero_youtube_url' => null,
                'showcase_images' => [
                    'products/showcase_images/01KXBPY2XJXBFFH2RAPX9J2NHG.webp',
                    'products/showcase_images/01KXBPY32A9WV4HTNMTS3DJFZW.webp',
                    'products/showcase_images/01KXBPY3KRYYB8DYEMMYK6G0K2.webp',
                    'products/showcase_images/01KXBPY3R4TSNVK6XGE16X6CF7.webp',
                ],
                'features_images' => [
                    'products/features_images/01KXBPY3WRNY2AQZTZJYVA2GAG.webp',
                    'products/features_images/01KXBPY3ZQ0BCGBKB8E0F8C7TE.webp',
                    'products/features_images/01KXBPY467YQ1W33VTGYNYBDBA.webp',
                ],
                'datasheet_file_path' => 'products/documents/01KXBPY2QPQ54BZBSBSY2C5NYD.pdf',
                'specifications' => [
                    [
                        'title' => 'Aircraft',
                        'items' => [
                            ['label' => 'Max Takeoff Weight', 'value' => '15.8 kg'],
                            ['label' => 'Max Payload', 'value' => '6 kg'],
                            ['label' => 'Propeller Size', 'value' => '25 inches'],
                        ],
                    ],
                    [
                        'title' => 'Gimbal',
                        'items' => [
                            ['label' => 'Maximum Payload for Single Gimbal Connector', 'value' => '1400 g'],
                            ['label' => 'Maximum Payload for Dual Gimbal Connector', 'value' => '950 g per mount'],
                        ],
                    ],
                ],
                'created_at' => '2026-07-12 17:45:25',
                'updated_at' => '2026-07-12 17:45:25',
                'translations' => [
                    [
                        'locale' => 'en',
                        'title_section' => 'Engineered for Excellence, Designed for Versatility',
                        'subtitle_section' => 'Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing',
                        'content' => '<p>DJI Matrice 400, the enterprise flagship drone platform, boasts an impressive 59-minute flight time, a payload capacity of up to 6 kg , and integrated rotating LiDAR and mmWave radar for power-line-level obstacle sensing. It also supports the O4 Enterprise Enhanced Video Transmission and Airborne Relay Video Transmission, ensuring safer handling and easier operations. Combining Smart Detection with visible and thermal imaging, AR projection, ship-based takeoff/landing, and advanced automation, Matrice 400 excels in emergency response, power inspections, mapping, and AEC.</p>',
                    ],
                    [
                        'locale' => 'id',
                        'title_section' => 'Direkayasa untuk Keunggulan, Dirancang untuk Fleksibilitas',
                        'subtitle_section' => 'Platform Drone Berdaya Tahan Tinggi dengan Kemampuan Mendeteksi Hambatan Setingkat Kabel Listrik',
                        'content' => '<p>DJI Matrice 400, platform drone unggulan untuk sektor enterprise, menawarkan waktu terbang impresif selama 59 menit, kapasitas muatan hingga 6 kg, serta integrasi LiDAR berputar dan radar mmWave untuk deteksi rintangan tingkat tinggi (seperti pada jaringan listrik). Drone ini juga mendukung teknologi O4 Enterprise Enhanced Video Transmission dan Airborne Relay Video Transmission, yang menjamin pengendalian lebih aman serta pengoperasian yang lebih mudah. ​​Dengan memadukan fitur Smart Detection, pencitraian visual dan termal, proyeksi AR, kemampuan lepas landas/mendarat di kapal, serta otomatisasi canggih, Matrice 400 unggul dalam berbagai bidang seperti tanggap darurat, inspeksi jaringan listrik, pemetaan, dan sektor AEC.</p>',
                    ],
                ],
            ],

            // =============================================
            // 4. DJI ZENMUSE L3
            // =============================================
            [
                'sort' => 0,
                'brand_id' => 1,
                'title' => 'DJI ZENMUSE L3',
                'slug' => 'dji-zenmuse-l3',
                'thumbnail_image' => 'products/thumbnail/01KXBQ6RXNCHTKT43NEHSX2X9E.webp',
                'hero_media_type' => 'image',
                'hero_image_path' => 'products/hero_images/01KXBQ6RT2JH3T95H9Q1MJFA3C.webp',
                'hero_youtube_url' => null,
                'showcase_images' => [
                    'products/showcase_images/01KXBQ6S3MRXY9HBEV6FXRZDEZ.webp',
                    'products/showcase_images/01KXBQ6SPCJVBBAKBM9Y15C5YG.webp',
                    'products/showcase_images/01KXBQ6VASZ5N7JNW5X2M1VVK7.webp',
                    'products/showcase_images/01KXBQ6VJQ0M7NHRNMPQQ53Z2P.webp',
                    'products/showcase_images/01KXBQ6VQ1VWRXN6DNFR173YJ6.webp',
                ],
                'features_images' => [
                    'products/features_images/01KXBQ6XBWX7NVQAEYFHADKW55.webp',
                    'products/features_images/01KXBQ6YP6GYN3H43JKXMJ0R9Z.webp',
                    'products/features_images/01KXBQ6YS057JDGDRKPET4HE1Z.webp',
                    'products/features_images/01KXBQ6YZ6T6KJ216N1W3XNHRB.webp',
                ],
                'datasheet_file_path' => 'products/documents/01KXBQ6RXGS13XM6AMBXJD225P.pdf',
                'specifications' => [
                    [
                        'title' => 'RGB Mapping Camera',
                        'items' => [
                            ['label' => 'Sensor', 'value' => '4/3 CMOS'],
                            ['label' => 'Lens', 'value' => 'Equivalent Focal Length: 28 mm'],
                        ],
                    ],
                    [
                        'title' => 'Position and Orientation System (POS)',
                        'items' => [
                            ['label' => 'GNSS Update Rate', 'value' => '5 Hz'],
                            ['label' => 'POS Update Rate', 'value' => '200 Hz'],
                        ],
                    ],
                ],
                'created_at' => '2026-07-12 17:50:14',
                'updated_at' => '2026-07-12 17:50:57',
                'translations' => [
                    [
                        'locale' => 'en',
                        'title_section' => 'See Through, Far and True',
                        'subtitle_section' => 'DJI\'s First Long-Range, High-Accuracy Aerial LiDAR System',
                        'content' => '<p>DJI\'s next-generation high-accuracy aerial LiDAR system features a long-range LiDAR capable of reaching up to 950 m even on objects with just 10% reflectivity. Dual 100MP RGB mapping cameras and a high-precision POS system accelerate geospatial data acquisition, enabling daily coverage of up to 100 km².</p>',
                    ],
                    [
                        'locale' => 'id',
                        'title_section' => 'Melihat Tembus, Jauh, dan Tepat',
                        'subtitle_section' => 'Sistem LiDAR Udara Jarak Jauh dan Berakurasi Tinggi Pertama dari DJI',
                        'content' => '<p>Sistem LiDAR udara berakurasi tinggi generasi terbaru dari DJI dilengkapi dengan LiDAR jarak jauh yang mampu menjangkau hingga 950 meter, bahkan pada objek dengan tingkat reflektivitas hanya 10%. Kamera pemetaan RGB ganda beresolusi 100MP dan sistem POS presisi tinggi mempercepat akuisisi data geospasial, sehingga memungkinkan cakupan area hingga 100 km² setiap harinya.</p>',
                    ],
                ],
            ],

            // =============================================
            // 5. Unitree G1
            // =============================================
            [
                'sort' => 0,
                'brand_id' => 2,
                'title' => 'Unitree G1',
                'slug' => 'unitree-g1',
                'thumbnail_image' => 'products/thumbnail/01KXBQNK4HCPSMT6YM3YSWGRVJ.webp',
                'hero_media_type' => 'image',
                'hero_image_path' => 'products/hero_images/01KXBQNHKAWMS7XJ627BV50FHT.webp',
                'hero_youtube_url' => null,
                'showcase_images' => [
                    'products/showcase_images/01KXBQNKJR5JPM65C4DKYGQ7T0.webp',
                    'products/showcase_images/01KXBQNN7D067BADPFC3JA2T1C.webp',
                    'products/showcase_images/01KXBQNNCVC0CD1ZB0KJRK8EFA.webp',
                    'products/showcase_images/01KXBQNNN95X7JNNTVWFRG402Q.webp',
                ],
                'features_images' => [
                    'products/features_images/01KXBQNP0NPCV4RKZKCAHCHG9X.webp',
                    'products/features_images/01KXBQNRTW284KAHD8YGGC25P2.webp',
                    'products/features_images/01KXBQNS1STM2SW6J6R71P3J56.webp',
                ],
                'datasheet_file_path' => 'products/documents/01KXBQNK4BQ5YTS3TQ4VFMDJ0K.jpg',
                'specifications' => [
                    [
                        'title' => 'Key Specifications',
                        'items' => [
                            ['label' => 'Height & Weight', 'value' => '132 cm & 35 kg'],
                            ['label' => 'Mobility & Flexibility', 'value' => 'Features 23 to 43 Degrees of Freedom (DOF), allowing dynamic movements like running (up to 2 m/s), jumping, executing kip-ups, and folding compact for storage.'],
                            ['label' => 'Actuators', 'value' => 'Powered by high-torque joint motors (knee joint max torque: 90 N·m on standard, 120 N·m on EDU).'],
                            ['label' => 'Sensory Perception', 'value' => 'Equipped with a 3D LiDAR system (Livox Mid-360) and an Intel RealSense depth camera for real-time 360° environmental mapping and obstacle avoidance.'],
                            ['label' => 'Battery & Runtime', 'value' => 'Uses a 9000 mAh quick-release smart battery providing roughly 2 hours of operation.'],
                        ],
                    ],
                ],
                'created_at' => '2026-07-12 17:58:19',
                'updated_at' => '2026-07-12 18:01:20',
                'translations' => [
                    [
                        'locale' => 'en',
                        'title_section' => 'Humanoid Agent AI Avatar',
                        'subtitle_section' => 'Humanoid Robot',
                        'content' => '<p>The <strong>Unitree G1</strong> humanoid intelligent agent is an AI avatar. Standing approximately 132 cm tall and weighing about 35 kg, it possesses superhuman agility, unlocking limitless athletic potential. Its jogging speed exceeds 2 m/s, and it boasts a wide range of joint motion, with 23 to 43 joints and a maximum joint torque of 120 N·m, enabling it to perform highly complex dynamic movements such as dynamic standing, sitting and folding, and stick dancing. Furthermore, G1 is continuously upgraded and evolved based on deep reinforcement learning and simulation training, leveraging the accelerated development of AI.</p>',
                    ],
                    [
                        'locale' => 'id',
                        'title_section' => 'Unitree G1',
                        'subtitle_section' => 'G1',
                        'content' => '<p><strong>Unitree G1</strong> adalah robot humanoid (robot berbentuk manusia) yang dikembangkan oleh Unitree Robotics dari Tiongkok.<br>Dengan tinggi sekitar 132 cm dan berat sekitar 35 kg, ia memiliki kelincahan luar biasa, membuka potensi atletik tanpa batas. Kecepatan joggingnya melebihi 2 m/s, dan ia memiliki rentang gerak sendi yang luas, dengan 23 hingga 43 sendi dan torsi sendi maksimum 120 N·m, memungkinkannya untuk melakukan gerakan dinamis yang sangat kompleks seperti berdiri, duduk, dan melipat secara dinamis, serta menari dengan tongkat. Lebih lanjut, G1 terus ditingkatkan dan dikembangkan berdasarkan pembelajaran penguatan mendalam dan pelatihan simulasi, memanfaatkan perkembangan AI yang dipercepat.</p>',
                    ],
                ],
            ],
        ];

        // =============================================
        // Insert ke database via Eloquent
        // =============================================
        foreach ($products as $item) {
            $translations = $item['translations'];
            unset($item['translations']);

            $product = Product::create($item);

            $product->translations()->createMany($translations);
        }
    }
}
