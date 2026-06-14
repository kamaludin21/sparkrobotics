@extends('layout.app')

@section('content')
  <section class="container mx-auto px-2 sm:px-0 py-32 font-sans">
    <div class="mb-8 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
      <div class="font-jakarta">
        <h1 class="text-3xl font-bold text-slate-900 tracking-tight">Katalog Produk</h1>
        <p class="text-slate-500 mt-2 text-sm md:text-base">Eksplorasi solusi drone enterprise, payload, dan perangkat
          lunak
          pemetaan.</p>
      </div>
      <div class="flex items-center gap-3">
        <div class="relative w-full md:w-64">
          <input type="text" placeholder="Cari produk..."
            class="w-full pl-4 pr-10 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none text-sm transition-all" />
        </div>
        <select
          class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-sky-500 outline-none text-sm bg-white cursor-pointer appearance-none">
          <option>Urutkan: A-Z</option>
          <option>Urutkan: Z-A</option>
        </select>
      </div>
    </div>

    <div class="flex flex-col lg:flex-row gap-8 items-start">

      <aside class="w-full lg:w-1/4 lg:sticky lg:top-20 shrink-0">
        <div class="bg-white rounded-xl shadow-sm border border-slate-100 p-6">
          <div class="mb-6 flex items-center justify-between">
            <h2 class="text-lg font-bold text-slate-900">Filter</h2>
            <span class="text-xs font-semibold text-sky-700 bg-sky-50 px-2.5 py-1 rounded-full">15 Produk</span>
          </div>

          <div class="mb-6">
            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Berdasarkan Kategori</h3>
            <div class="space-y-3">
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox" checked
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Flight
                  Platform</span>
              </label>

              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Payloads &
                  Sensors</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Humanoid
                  Series</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Quadruped
                  Series</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">DJI
                  Dock</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Software &
                  Ecosystem</span>
              </label>
            </div>
          </div>

          <hr class="border-slate-100 mb-6" />

          <div>
            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">Berdasarkan Solusi</h3>
            <div class="space-y-3">
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Pemetaan &
                  Survei</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Inspeksi &
                  Termal</span>
              </label>
            </div>
          </div>
        </div>
      </aside>

      <main class="w-full lg:w-3/4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-start">

          <div
            class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full relative">
            <div class="h-72 bg-slate-50 relative overflow-hidden flex items-center justify-center">
              <img src="https://www-cdn.djiits.com/dps/45196aac8f231fe2ae211c76a473212b.jpg" alt="DJI Mavic 3M"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200" />
            </div>
            <div class="p-5 flex flex-col flex-grow bg-white">
              <span class="text-[11px] font-bold text-sky-600 uppercase tracking-widest mb-1.5">Flight Platform</span>
              <h3 class="text-lg font-bold text-slate-900 leading-tight mb-1">DJI Mavic 3M</h3>
              <p class="text-sm text-slate-500 line-clamp-1 mb-5">Multispectral Mapping Drone</p>

              <div class="mt-auto border-t border-slate-50 pt-4">
                <a href="/products/detail"
                  class="block w-full text-center px-4 py-2 bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl group-hover:bg-sky-600 group-hover:text-white transition-colors duration-300">
                  Lihat Spesifikasi
                </a>
              </div>
            </div>
          </div>
          <div
            class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full relative">
            <div class="h-72 bg-slate-50 relative overflow-hidden flex items-center justify-center">
              <img src="https://www-cdn.djiits.com/cms/uploads/2d815a0c623a62addfc4bf4c992c9d2a.png" alt="DJI Mavic 3M"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200" />
            </div>
            <div class="p-5 flex flex-col flex-grow bg-white">
              <span class="text-[11px] font-bold text-sky-600 uppercase tracking-widest mb-1.5">Payloads</span>
              <h3 class="text-lg font-bold text-slate-900 leading-tight mb-1">DJI Zenmuse L2</h3>
              <p class="text-sm text-slate-500 line-clamp-1 mb-5">High-Accuracy LiDAR Sensor</p>

              <div class="mt-auto border-t border-slate-50 pt-4">
                <a href="/products/detail"
                  class="block w-full text-center px-4 py-2 bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl group-hover:bg-sky-600 group-hover:text-white transition-colors duration-300">
                  Lihat Spesifikasi
                </a>
              </div>
            </div>
          </div>

          <div
            class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full relative">
            <span
              class="absolute top-4 right-4 z-10 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-md tracking-wider shadow-sm">
              ECOSYSTEM
            </span>
            <div class="h-72 bg-slate-50 relative overflow-hidden flex items-center justify-center">
              <img
                src="https://geospatial.chcnav.com/dam/jcr:cf88547a-a8cb-4b7f-b4cc-ce0dd4840257/chcnav-apache-3-cost-effective-single-beam-usv-kv.png"
                alt="DJI Mavic 3M"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200" />
            </div>
            <div class="p-5 flex flex-col flex-grow bg-white">
              <span class="text-[11px] font-bold text-sky-600 uppercase tracking-widest mb-1.5">Marine Drone</span>
              <h3 class="text-lg font-bold text-slate-900 leading-tight mb-1">CHCNAV Apache 3</h3>
              <p class="text-sm text-slate-500 line-clamp-1 mb-5">Compact USV untuk Batimetri</p>

              <div class="mt-auto border-t border-slate-50 pt-4">
                <a href="/products/detail"
                  class="block w-full text-center px-4 py-2 bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl group-hover:bg-sky-600 group-hover:text-white transition-colors duration-300">
                  Lihat Spesifikasi
                </a>
              </div>
            </div>
          </div>

          <div
            class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full relative">
            <span
              class="absolute top-4 right-4 z-10 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-2.5 py-1 rounded-md tracking-wider shadow-sm">
              ECOSYSTEM
            </span>
            <div class="h-72 bg-slate-50 relative overflow-hidden flex items-center justify-center">
              <img src="https://i0.wp.com/halorobotics.com/wp-content/uploads/2026/01/Unitree-R1.png" alt="DJI Mavic 3M"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200" />
            </div>
            <div class="p-5 flex flex-col flex-grow bg-white">
              <span class="text-[11px] font-bold text-sky-600 uppercase tracking-widest mb-1.5">Humanoid Series</span>
              <h3 class="text-lg font-bold text-slate-900 leading-tight mb-1">Unitree R1</h3>
              <p class="text-sm text-slate-500 line-clamp-1 mb-5">Research Cobot</p>

              <div class="mt-auto border-t border-slate-50 pt-4">
                <a href="/products/detail"
                  class="block w-full text-center px-4 py-2 bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl group-hover:bg-sky-600 group-hover:text-white transition-colors duration-300">
                  Lihat Spesifikasi
                </a>
              </div>
            </div>
          </div>

          <div
            class="bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden group hover:shadow-xl transition-all duration-300 flex flex-col h-full relative">
            <div class="h-72 bg-slate-50 relative overflow-hidden flex items-center justify-center">
              <img src="https://www.unitree.com/images/0dd70ad4f1e74e6097a38585a99666aa_800x800.png" alt="DJI Mavic 3M"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-200" />
            </div>
            <div class="p-5 flex flex-col flex-grow bg-white">
              <span class="text-[11px] font-bold text-sky-600 uppercase tracking-widest mb-1.5">Quadruped Series</span>
              <h3 class="text-lg font-bold text-slate-900 leading-tight mb-1">Unitree B2</h3>
              <p class="text-sm text-slate-500 line-clamp-1 mb-5">Flagship Industrial</p>

              <div class="mt-auto border-t border-slate-50 pt-4">
                <a href="/products/detail"
                  class="block w-full text-center px-4 py-2 bg-slate-50 text-slate-700 text-sm font-semibold rounded-xl group-hover:bg-sky-600 group-hover:text-white transition-colors duration-300">
                  Lihat Spesifikasi
                </a>
              </div>
            </div>
          </div>

        </div>
      </main>
    </div>
  </section>
@endsection
