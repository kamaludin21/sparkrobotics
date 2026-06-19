@extends('layout.app', ['activePage' => 'products'])

@section('content')
  <main class="main-wrapper px-4 py-24 md:py-32">
    <div class="mb-8 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
      <div class="space-y-2">
        <h2 class="text-4xl md:text-5xl font-bold text-slate-700 font-jakarta">Katalog Produk</h2>
        <p class="text-slate-500 mt-2 text-sm md:text-base">Eksplorasi solusi drone enterprise, payload, dan perangkat
          lunak
          pemetaan.</p>
      </div>
      <div class="flex items-center gap-3">
        <div class="relative w-full md:w-64">
          <input type="text" placeholder="Cari produk..."
            class="w-full pl-4 pr-10 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none text-sm transition-all" />
        </div>
      </div>
    </div>
    <div class="flex flex-col lg:flex-row gap-8 items-start">
      <aside class="w-full lg:w-1/4 lg:sticky lg:top-20 shrink-0">
        <div class="bg-white rounded-xl shadow-sm ring-1 ring-slate-200 p-6">
          <div class="mb-6 flex items-center justify-between">
            <h2 class="text-lg font-bold text-slate-900">Filter</h2>
          </div>

          <div class="mb-6">
            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">BY Categories</h3>
            <div class="space-y-3">
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox" checked
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Air
                  Craft</span>
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
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Accessories
                </span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span
                  class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Payload</span>
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
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">Software &
                  Ecosystem</span>
              </label>
            </div>
          </div>

          <hr class="border-slate-100 mb-6" />

          <div>
            <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">By Brand</h3>
            <div class="space-y-3">
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">DJI
                  Enterprise</span>
              </label>
              <label class="flex items-center gap-3 cursor-pointer group">
                <input type="checkbox"
                  class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                <span
                  class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">UNITREE</span>
              </label>
            </div>
          </div>
        </div>
      </aside>

      <main class="w-full lg:w-3/4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-start">
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img src="https://fujishop.id/wp-content/uploads/2025/11/DJI-Dock-3-Overseas-Edition-01.jpg" alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  DJI Dock 3
                </h3>
                <p class="mt-2 text-slate-600">
                  DJI's First Dock Adaptable for Vehicle Mounting
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img
                src="https://se-cdn.djiits.com/tpc/uploads/spu_bundle/cover/a717e6dca76e821a0b6569e764cbf64f@ultra.webp"
                alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  DJI Matrice 400
                </h3>
                <p class="mt-2 text-slate-600">
                  Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img
                src="https://www-cdn.djiits.com/dps/5168f7ff8f661a008798e1bd23e15d3c.jpg"
                alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  DJI Matrice 4 Series
                </h3>
                <p class="mt-2 text-slate-600">
                  Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img
                src="https://www-cdn.djiits.com/dps/e5c6077a1fe201229f8fd0ca7e043ccf.png?w=780&h=600"
                alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  Zenmuse L3
                </h3>
                <p class="mt-2 text-slate-600">
                  Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img
                src="https://shop.unitree.com/cdn/shop/files/2_3769ceea-b323-4ebc-a1f4-e27a9624706b_900x.jpg?v=1717575246"
                alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  Unitree G1
                </h3>
                <p class="mt-2 text-slate-600">
                  Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img
                src="https://shop.unitree.com/cdn/shop/files/df9f333424ff6cc6164ce421b019fb94_a6f832b0-479e-4294-ac75-6516208b91f4_900x.png?v=1718274082"
                alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  Unitree Go2
                </h3>
                <p class="mt-2 text-slate-600">
                  Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>
          <div class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100 bg-slate-100">
              <img
                src="https://shop.unitree.com/cdn/shop/files/7_715e53a1-4b3d-493a-bcfa-e3bc4c123e98_900x.jpg?v=1769774094"
                alt=""
                class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="flex flex-1 flex-col p-6 border-t-1 border-slate-200">
              <div>
                <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                  Unitree A2
                </h3>
                <p class="mt-2 text-slate-600">
                  Long-Endurance Drone Platform With Power-Line-Level Obstacle Sensing
                </p>
              </div>
              <div class="mt-auto pt-6">
                <a href="/products/detail"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  View Details
                </a>
              </div>
            </div>
          </div>

        </div>
        {{-- Pagination --}}
        {{-- CUSTOM PAGINATION --}}
        <div class="mt-16 pt-10 border-t border-slate-100 flex flex-col items-center gap-6">
          <div class="flex justify-center items-center gap-2">
            {{-- Previous --}}
            {{-- <span
              class="w-10 h-10 rounded-xl border border-slate-100 flex items-center justify-center text-slate-200 cursor-not-allowed">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </span> --}}
            <a href="#"
              class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-sky-600 hover:text-white transition-all shadow-sm">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </a>

            {{-- Page Numbers --}}
            <span
              class="w-10 h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white font-bold shadow-md shadow-sky-100 ring-2 ring-sky-100">
              1
            </span>
            <a href=""
              class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-sky-600 hover:text-white transition-all shadow-sm">
              2
            </a>
            {{-- Next --}}

            <a href="#"
              class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-sky-600 hover:text-white transition-all shadow-sm">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </a>
            {{-- <span
              class="w-10 h-10 rounded-xl border border-slate-100 flex items-center justify-center text-slate-200 cursor-not-allowed">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg> --}}
            </span>
          </div>

          <p class="text-[10px] text-slate-400 uppercase tracking-[0.2em] font-semibold">
            Menampilkan 1 - 2 dari 10 Produk
          </p>
        </div>
        {{-- Pagination --}}
      </main>
    </div>
  </main>
@endsection
