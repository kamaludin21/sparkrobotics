@extends('layout.app', ['activePage' => 'products'])

@section('content')
  <main class="main-wrapper px-4 py-24 md:py-32">
    <form action="{{ url()->current() }}" method="GET" id="filter-form">

      <div class="mb-8 flex flex-col md:flex-row md:items-end md:justify-between gap-4">
        <div class="space-y-2">
          <h2 class="text-4xl md:text-5xl font-bold text-slate-700 font-jakarta">{{ t('productsPage_title_page') }}</h2>
          <p class="text-slate-500 mt-2 text-sm md:text-base">{{ t('productsPage_subtitle_page') }}</p>
        </div>
        <div class="flex items-center gap-3">
          <div class="relative w-full md:w-64">
            <input type="text" name="search" value="{{ request('search') }}"
              placeholder="{{ t('productsPage_search_input') }}..."
              class="w-full pl-4 pr-10 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-sky-500 focus:border-sky-500 outline-none text-sm transition-all"
              onkeydown="if(event.key === 'Enter'){ event.preventDefault(); this.form.submit(); }" />
            <button type="submit" class="absolute right-3 top-2.5 text-slate-400 hover:text-sky-600">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <div class="flex flex-col lg:flex-row gap-8 items-start">

        <aside class="w-full lg:w-1/4 lg:sticky lg:top-20 shrink-0">
          <div class="bg-white rounded-xl shadow-sm ring-1 ring-slate-200 p-6">
            <div class="mb-6 flex items-center justify-between">
              <h2 class="text-lg font-bold text-slate-900">Filter</h2>
              @if (request()->hasAny(['search', 'categories', 'brands']))
                <a href="{{ url()->current() }}" class="text-sm text-sky-600 hover:underline">Reset</a>
              @endif
            </div>

            <div class="mb-6">
              <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">
                {{ t('productsPage_filter_category') }}</h3>
              <div class="space-y-3">
                @foreach ($categories as $item)
                  <label class="flex items-center gap-3 cursor-pointer group">
                    <input type="checkbox" name="categories[]" value="{{ $item->id }}"
                      {{ in_array($item->id, (array) request('categories', [])) ? 'checked' : '' }}
                      onchange="this.form.submit();"
                      class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                    <span
                      class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">{{ $item->name }}</span>
                  </label>
                @endforeach
              </div>
            </div>

            <hr class="border-slate-100 mb-6" />

            <div>
              <h3 class="text-xs font-bold text-slate-400 uppercase tracking-wider mb-4">{{ t('productsPage_filter_brand') }}
              </h3>
              <div class="space-y-3">
                @foreach ($brands as $item)
                  <label class="flex items-center gap-3 cursor-pointer group">
                    <input type="checkbox" name="brands[]" value="{{ $item->id }}"
                      {{ in_array($item->id, (array) request('brands', [])) ? 'checked' : '' }}
                      onchange="this.form.submit();"
                      class="w-4 h-4 text-sky-600 rounded border-slate-300 focus:ring-sky-500 cursor-pointer" />
                    <span
                      class="text-sm font-medium text-slate-700 group-hover:text-slate-900 transition-colors">{{ $item->name }}</span>
                  </label>
                @endforeach
              </div>
            </div>
          </div>
        </aside>

        <main class="w-full lg:w-3/4">
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-start">

            @forelse ($products as $item)
              <article class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
                <div class="relative h-56 overflow-hidden bg-slate-100">
                  @if (!empty($item->showcase_images) && isset($item->showcase_images[0]))
                    <img src="{{ Storage::url($item->showcase_images[0]) }}" alt="{{ $item->title }}" loading="lazy"
                      class="absolute inset-0 h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-105">
                  @else
                    <div class="absolute inset-0 flex items-center justify-center bg-slate-200 text-slate-400">
                      <span class="text-sm">No Image</span>
                    </div>
                  @endif
                </div>
                <div class="flex flex-1 flex-col p-6 border-t border-slate-200">
                  <div>
                    <h3 class="text-2xl font-semibold text-slate-700 transition-colors group-hover:text-sky-600">
                      <a href="{{ localized_route('products.show', $item->slug) }}">{{ $item->title }}</a>
                    </h3>
                    <p class="mt-2 text-slate-600 line-clamp-3">
                      {{ $item->title_section }}
                    </p>
                  </div>
                  <div class="mt-auto pt-6">
                    <a href="{{ localized_route('products.show', $item->slug) }}"
                      aria-label="Lihat detail untuk {{ $item->title }}"
                      class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                      {{ t('productsPage_detail_button') }}
                    </a>
                  </div>
                </div>
              </article>
            @empty
              <div
                class="col-span-full bg-white border border-dashed border-slate-300 rounded-2xl py-16 text-center text-slate-500 space-y-2">
                <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-base font-medium text-slate-600">Produk tidak ditemukan</p>
                <p class="text-sm text-slate-400 mt-1">Coba gunakan kata kunci lain atau ubah filter Anda.</p>
                @if (request()->hasAny(['search', 'categories', 'brands']))
                  <a href="{{ url()->current() }}" class="text-sm text-sky-600 hover:underline">Kembali</a>
                @endif
              </div>
            @endforelse
          </div>

          @if ($products->hasPages())
            <div class="mt-16 pt-10 border-t border-slate-100 flex flex-col items-center gap-6">
              <div class="flex justify-center items-center gap-2">

                {{-- Tombol Previous --}}
                @if ($products->onFirstPage())
                  <span
                    class="w-10 h-10 rounded-xl border border-slate-100 flex items-center justify-center text-slate-200 cursor-not-allowed">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                  </span>
                @else
                  <a href="{{ $products->previousPageUrl() }}"
                    class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-sky-600 hover:text-white transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                  </a>
                @endif

                {{-- Angka Halaman --}}
                @foreach ($products->getUrlRange(max(1, $products->currentPage() - 1), min($products->lastPage(), $products->currentPage() + 1)) as $page => $url)
                  @if ($page == $products->currentPage())
                    <span
                      class="w-10 h-10 rounded-xl bg-sky-600 flex items-center justify-center text-white font-bold shadow-md shadow-sky-100 ring-2 ring-sky-100">
                      {{ $page }}
                    </span>
                  @else
                    <a href="{{ $url }}"
                      class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-sky-600 hover:text-white transition-all shadow-sm">
                      {{ $page }}
                    </a>
                  @endif
                @endforeach

                {{-- Tombol Next --}}
                @if ($products->hasMorePages())
                  <a href="{{ $products->nextPageUrl() }}"
                    class="w-10 h-10 rounded-xl border border-slate-200 flex items-center justify-center text-slate-600 hover:bg-sky-600 hover:text-white transition-all shadow-sm">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                  </a>
                @endif
              </div>

              <div class="text-center mt-4">
                <p class="text-xs text-gray-400 uppercase tracking-widest">
                  Menampilkan {{ $products->firstItem() ?? 0 }} - {{ $products->lastItem() ?? 0 }} dari
                  {{ $products->total() }} Produk
                </p>
              </div>
            </div>
          @endif
        </main>
      </div>
    </form>
  </main>
@endsection
