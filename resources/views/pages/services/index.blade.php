@extends('layout.app')

@section('content')
  <section class="py-20 bg-slate-50 relative" x-data="layananSpark()">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

      <div class="my-16 flex flex-col lg:flex-row lg:items-end justify-between gap-6 lg:gap-12">
        <div class="w-full lg:max-w-2xl space-y-4">
          <h2 class="text-4xl lg:text-5xl font-semibold text-slate-800 tracking-tight">Solutions and Services</h2>
          <p class="text-lg text-slate-600 leading-relaxed">
            Solusi komprehensif kami memanfaatkan teknologi UAV, LiDAR, dan fotogrametri terdepan untuk menghadirkan
            akurasi dan efisiensi maksimal pada setiap tahap proyek industri Anda.
          </p>
        </div>

        <div class="shrink-0">
          <a href="#kontak"
            class="inline-flex items-center justify-center px-7 py-3.5 text-base font-semibold text-white bg-sky-600 rounded-xl shadow-sm hover:bg-slate-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-600 transition-all duration-300 group">
            Konsultasi Sekarang
            <svg class="w-5 h-5 ml-2.5 transform group-hover:translate-x-1.5 transition-transform duration-300"
              fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <template x-for="(item, index) in services" :key="index">
          <div
            class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 overflow-hidden cursor-pointer group flex flex-col"
            @click="openModal(item)">

            <div class="h-56 overflow-hidden relative">
              <div class="absolute inset-0 bg-sky-900/10 group-hover:bg-transparent transition-colors z-10 duration-500">
              </div>
              <img :src="item.images[0]" :alt="item.title"
                class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
            </div>

            <div class="p-6 flex-grow flex flex-col">
              <h3 class="text-xl font-bold text-sky-600 mb-3" x-text="item.title"></h3>
              <p class="text-slate-600 text-sm flex-grow mb-5 line-clamp-3 leading-relaxed" x-text="item.description"></p>
              <div
                class="mt-auto flex items-center text-sm font-semibold text-sky-600 group-hover:text-sky-800 transition-colors">
                <span>Lihat Detail Layanan</span>
                <svg class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform" fill="none"
                  stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3">
                  </path>
                </svg>
              </div>
            </div>
          </div>
        </template>
      </div>
    </div>

    <div x-show="isOpen" style="display: none;"
      class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-slate-900/80 backdrop-blur-sm"
      x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0"
      x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200"
      x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0" @click.self="closeModal()"
      @keydown.escape.window="closeModal()">

      <div
        class="bg-white rounded-2xl overflow-hidden max-w-5xl w-full shadow-2xl relative flex flex-col md:flex-row max-h-[90vh]"
        x-show="isOpen" x-transition:enter="transition ease-out duration-400 transform"
        x-transition:enter-start="opacity-0 translate-y-12 scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 scale-100"
        x-transition:leave="transition ease-in duration-200 transform"
        x-transition:leave-start="opacity-100 translate-y-0 scale-100"
        x-transition:leave-end="opacity-0 translate-y-12 scale-95">

        <button @click="closeModal()"
          class="absolute top-4 right-4 text-white md:text-slate-500 bg-black/40 hover:bg-black/60 md:bg-slate-100 md:hover:bg-slate-200 rounded-full p-2 z-30 transition-colors focus:outline-none focus:ring-2 focus:ring-sky-600">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>

        <div class="w-full md:w-1/2 relative h-72 md:h-auto shrink-0 bg-slate-950 overflow-hidden group/slider">

          <div class="w-full h-full relative">
            <template x-for="(img, idx) in activeItem.images" :key="idx">
              <div x-show="activeSlide === idx" x-transition:enter="transition ease-in-out duration-500 transform"
                x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in-out duration-500 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                class="absolute inset-0 w-full h-full">
                <img :src="img" :alt="activeItem.title" class="w-full h-full object-contain">
              </div>
            </template>
          </div>

          <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black/40 md:hidden pointer-events-none"></div>

          <template x-if="activeItem.images && activeItem.images.length > 1">
            <div>
              <button @click="prevSlide()"
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-sky-600/90 text-white rounded-full p-2 z-20 transition-all opacity-100 md:opacity-0 group-hover/slider:opacity-100 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
              </button>

              <button @click="nextSlide()"
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/30 hover:bg-sky-600/90 text-white rounded-full p-2 z-20 transition-all opacity-100 md:opacity-0 group-hover/slider:opacity-100 focus:outline-none">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
              </button>

              <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2 z-20">
                <template x-for="(img, idx) in activeItem.images" :key="idx">
                  <button @click="activeSlide = idx"
                    :class="activeSlide === idx ? 'bg-sky-600 w-6' : 'bg-white/50 hover:bg-white w-2'"
                    class="h-2 rounded-full transition-all duration-300 focus:outline-none"></button>
                </template>
              </div>
            </div>
          </template>
        </div>

        <div class="w-full md:w-1/2 p-6 md:p-10 flex flex-col bg-white overflow-y-auto">
          <h3 class="text-2xl md:text-3xl font-bold text-sky-600 mb-4" x-text="activeItem.title"></h3>

          <template x-if="activeItem.description">
            <p class="text-slate-600 text-base mb-8 leading-relaxed" x-text="activeItem.description"></p>
          </template>

          <h4 class="font-semibold text-slate-800 mb-4 flex items-center" x-text="activeItem.listTitle"></h4>

          <div class="space-y-3" x-data="{ activeScope: null }">
            <template x-for="(sub, sIndex) in activeItem.list" :key="sIndex">
              <div class="border border-slate-200 rounded-lg overflow-hidden transition-all duration-200"
                :class="activeScope === sIndex ? 'border-sky-200 bg-sky-50/30 shadow-sm' : 'bg-slate-50/50'">

                <button @click="if(sub.subtitle) activeScope = activeScope === sIndex ? null : sIndex"
                  class="w-full flex items-center justify-between p-3.5 text-left focus:outline-none transition-colors"
                  :class="[
                      sub.subtitle ? 'cursor-pointer hover:bg-slate-100/50' : 'cursor-default',
                      activeScope === sIndex ? 'bg-sky-50/50' : ''
                  ]">

                  <div class="flex items-center">
                    <svg class="w-5 h-5 mr-3 shrink-0 transition-colors duration-300"
                      :class="activeScope === sIndex ? 'text-sky-600' : 'text-slate-400'" fill="none"
                      stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="font-semibold text-sm transition-colors duration-300"
                      :class="activeScope === sIndex ? 'text-sky-700' : 'text-slate-700'" x-text="sub.title"></span>
                  </div>

                  <template x-if="sub.subtitle">
                    <svg class="w-4 h-4 transform transition-transform duration-300"
                      :class="activeScope === sIndex ? 'rotate-180 text-sky-600' : 'text-slate-400'" fill="none"
                      stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </template>
                </button>

                <template x-if="sub.subtitle">
                  <div x-show="activeScope === sIndex" style="display: none;"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2" class="px-11 pb-4 pt-1 bg-transparent">
                    <p class="text-sm text-slate-600 leading-relaxed" x-text="sub.subtitle"></p>
                  </div>
                </template>

              </div>
            </template>
          </div>
        </div>
      </div>
    </div>

    <script>
      function layananSpark() {
        return {
          isOpen: false,
          activeItem: {},
          activeSlide: 0,
          openModal(item) {
            this.activeItem = item;
            this.activeSlide = 0; // Reset ke slide pertama setiap kali membuka modal baru
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
          },
          closeModal() {
            this.isOpen = false;
            setTimeout(() => {
              document.body.style.overflow = '';
            }, 300);
          },
          nextSlide() {
            const totalImages = this.activeItem.images.length;
            this.activeSlide = (this.activeSlide + 1) % totalImages;
          },
          prevSlide() {
            const totalImages = this.activeItem.images.length;
            this.activeSlide = (this.activeSlide - 1 + totalImages) % totalImages;
          },
          // Data Array Layanan dengan Dummy Images ganda untuk fitur Slider
          services: [{
              title: 'Engineering Monitoring',
              description: 'Our comprehensive solution for all terrain mapping needs. SPARK Monitoring utilizes advanced photogrammetry and LiDAR technology to complete tasks such as topographic surveys, asset and inventory mapping, construction progress monitoring, inventory calculations, cut-and-fill analysis, and slope monitoring. Whether for architectural design needs or site studies, we provide high-resolution data.',
              images: [
                'https://cdn.emlid.com/site-work/Does-Emlid-fit-your-workflow+(1).webp',
                'https://cdn.emlid.com/main-page-new/software-block/Software_Flow.webp',
                'https://cdn.emlid.com/main-page-new/software-block/Software_Studio.webp'
              ],
              listTitle: "Services Scope",
              list: [{
                  title: 'Survei Topografi',
                  subtitle: null
                },
                {
                  title: 'Pemantauan Aset dan Inventaris',
                  subtitle: 'Menghasilkan database visual untuk status aset proyek real-time.'
                },
                {
                  title: 'Pemantauan Kemajuan Konstruksi',
                  subtitle: 'Melacak perkembangan proyek dengan tampilan resolusi tinggi dari udara.'
                },
                {
                  title: 'Perhitungan Volume',
                  subtitle: 'Mengestimasi perhitungan inventaris dan material di lapangan secara presisi.'
                },
                {
                  title: 'Analisis Cut-and-Fill',
                  subtitle: 'Pemetaan elevasi tanah untuk kebutuhan pengerukan dan penimbunan.'
                },
                {
                  title: 'Pemantauan Lereng',
                  subtitle: 'Menganalisis keamanan dan pergerakan lereng di area tambang atau tebing.'
                }
              ],
            },
            {
              title: '2. Intelligent Mapping',
              description: 'Utilizing drones equipped with high-resolution visible light cameras to quickly obtain surface imagery and generate high-precision orthomosaics and 3D models to meet visual surveying needs. When accuracy requirements are high, ground control points (GCPs) and image control points are required',
              images: [
                'https://placehold.co/600x400/0369a1/ffffff?text=Intelligent+Mapping+A',
              ],
              listTitle: 'Applicable Industries',
              list: [{
                  title: 'Engineering Design',
                  subtitle: null
                },
                {
                  title: 'Land Planning and Law Enforcement Supervision',
                  subtitle: null
                },
                {
                  title: 'Survei Hidrografi',
                  subtitle: 'Menggunakan kapal tanpa awak (USV) untuk survei batimetri dan topografi bawah air.'
                }
              ]
            },
            {
              title: '3. Pemantauan Lingkungan',
              description: 'Pemantauan data lingkungan secara real-time untuk mendeteksi perubahan lahan, memastikan kepatuhan regulasi, dan menekan risiko operasional.',
              images: [
                'https://placehold.co/600x400/0284c7/ffffff?text=Pemantauan+Lingkungan+A',
                'https://placehold.co/600x400/0369a1/ffffff?text=Pemantauan+Lingkungan+B'
              ],
              listTitle: 'Applicable Industries',
              list: [{
                  title: 'Deteksi Degradasi Lahan',
                  subtitle: 'Memantau area deforestasi dan perubahan tutupan lahan secara berkala.'
                },
                {
                  title: 'Deteksi Gas Rumah Kaca',
                  subtitle: 'Sensor khusus untuk memonitor emisi berbahaya di udara.'
                },
                {
                  title: 'Deteksi Kebocoran Pipa',
                  subtitle: 'Patroli jalur pipa gas alam menggunakan kamera termal dan visual.'
                },
                {
                  title: 'Analisis Vegetasi',
                  subtitle: 'Pencitraan multispektral untuk mendeteksi tingkat kekeringan dan risiko kebakaran.'
                }
              ]
            },
            {
              title: '4. Pemantauan Peralatan',
              description: 'Inspeksi visual presisi dan pengukuran non-destruktif (NDT) untuk menjamin keamanan struktural dari aset infrastruktur yang vital.',
              images: [
                'https://placehold.co/600x400/0369a1/ffffff?text=Pemantauan+Peralatan+A',
                'https://placehold.co/600x400/0284c7/ffffff?text=Pemantauan+Peralatan+B'
              ],
              listTitle: 'Applicable Industries',
              list: [{
                  title: 'Dasar-dasar Survei Udara UAV',
                  subtitle: 'Persiapan pra-penerbangan, penentuan Ground Control Point (GCP), dan eksekusi rute.'
                },
                {
                  title: 'Troubleshooting Lapangan',
                  subtitle: 'Pemecahan masalah umum yang sering dihadapi surveyor saat operasi.'
                },
                {
                  title: 'Pemrosesan Data dengan DJI Terra',
                  subtitle: 'Praktik langsung permodelan 3D dan pengecekan kualitas keluaran peta.'
                },
                {
                  title: 'Benefit Instansi/Korporasi',
                  subtitle: 'Satu pendaftaran mengizinkan hingga 5 peserta dengan dukungan teknis Q&A 2 bulan.'
                }
              ]
            },
            {
              title: '5. Inspeksi Jalur Kelistrikan',
              description: 'Menjamin kelancaran operasi dan pemeliharaan infrastruktur jaringan kelistrikan dengan armada drone yang efisien dan aman.',
              images: [
                'https://placehold.co/600x400/0284c7/ffffff?text=Inspeksi+Kelistrikan+A',
                'https://placehold.co/600x400/0c4a6e/ffffff?text=Inspeksi+Kelistrikan+B'
              ],
              listTitle: 'Applicable Industries',
              list: [{
                  title: 'Inspeksi Jaringan Transmisi',
                  subtitle: null
                },
                {
                  title: 'Inspeksi Jaringan Distribusi',
                  subtitle: null
                },
                {
                  title: 'Inspeksi Gardu Induk (Substation)',
                  subtitle: null
                },
                {
                  title: 'Inspeksi Infrastruktur Energi Bersih (Panel Surya)',
                  subtitle: null
                }
              ]
            },
            {
              title: '6. Patroli Keamanan',
              description: 'Sistem patroli keamanan udara dan monitoring real-time yang memungkinkan respons cepat dan terukur terhadap keadaan darurat.',
              images: [
                'https://placehold.co/600x400/0369a1/ffffff?text=Patroli+Keamanan+A',
                'https://placehold.co/600x400/0284c7/ffffff?text=Patroli+Keamanan+B'
              ],
              listTitle: 'Applicable Industries',
              list: [{
                  title: 'Patroli Keamanan Otomatis',
                  subtitle: null
                },
                {
                  title: 'Koordinasi Tanggap Darurat Udara-Darat',
                  subtitle: null
                },
                {
                  title: 'Pendeteksian Objek Otomatis',
                  subtitle: null
                },
                {
                  title: 'Pendeteksian Anomali Termal/Suhu Panas',
                  subtitle: null
                }
              ]
            },
            {
              title: '7. Pelatihan Survei & Pemetaan',
              description: 'Pelatihan teknis survei udara dan pemrosesan data UAV, dirancang untuk memastikan perusahaan dapat mengaplikasikan teknologi secara mandiri.',
              images: [
                'https://placehold.co/600x400/0284c7/ffffff?text=Pelatihan+Survei+A',
                'https://placehold.co/600x400/0369a1/ffffff?text=Pelatihan+Survei+B',
                'https://placehold.co/600x400/0c4a6e/ffffff?text=Pelatihan+Survei+C'
              ],
              listTitle: 'Applicable Industries',
              list: [{
                  title: 'Dasar-dasar Survei Udara UAV (GCP, Jalur Terbang)',
                  subtitle: null
                },
                {
                  title: 'Troubleshooting Lapangan Umum',
                  subtitle: null
                },
                {
                  title: 'Pemrosesan Data 3D Menggunakan DJI Terra',
                  subtitle: null
                },
                {
                  title: 'Dukungan Q&A Teknis Gratis 2 Bulan',
                  subtitle: null
                }
              ]
            }
          ]
        }
      }
    </script>
  </section>
@endsection
