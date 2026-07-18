@extends('layout.app', ['activePage' => 'news'])

@section('content')
  <main class="main-wrapper px-4 py-24 lg:py-32 overflow-x-hidden">
    <x-layout.news-nav :title="$category->title" :active="$category->slug" />
    <section class="py-10 w-full mx-auto">
      <form action="{{ localized_route('news.search') }}" method="GET" class="w-full max-w-lg mx-auto">
        <label for="default-search" class="sr-only">{{ t('newsPage_search_title') }}</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>
          <!-- Tambahkan name="q" dan value="{{ request('q') }}" -->
          <input type="search" id="default-search" name="q" value="{{ request('q') }}"
            class="block w-full p-4 pl-10 text-sm text-slate-700 border-1 border-slate-200 rounded-lg bg-slate-100 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all"
            placeholder="{{ t('newsPage_search_placeholder') }}" required />

          <button type="submit"
            class="text-white absolute right-2.5 bottom-2.5 bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-200 font-medium rounded-md text-sm px-4 py-2 transition-colors">
            {{ t('newsPage_search_submit') }}
          </button>
        </div>
      </form>
    </section>
    <section class="py-10 space-y-6">
      <div class="w-full">
        @php
          // Cek apakah halaman ini adalah hasil pencarian (ditandai dengan adanya parameter 'q' di URL)
          $isSearch = request()->has('q');
        @endphp

        <!-- Header Tabel -->
        <div
          class="hidden md:grid {{ $isSearch ? 'md:grid-cols-[1fr_150px_200px]' : 'md:grid-cols-[1fr_200px]' }} gap-6 border-b border-gray-200 pb-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
          <div>{{ t('newsPage_table_title') }}</div>
          <div>{{ t('newsPage_table_date') }}</div>

          @if ($isSearch)
            <div>{{ t('newsPage_table_category') }}</div>
          @endif
        </div>

        <!-- Looping Artikel -->
        @foreach ($articles as $item)
          <div
            class="flex flex-col md:grid {{ $isSearch ? 'md:grid-cols-[1fr_150px_200px]' : 'md:grid-cols-[1fr_200px]' }} gap-2 md:gap-6 border-b border-gray-200 py-5">

            <!-- Judul Artikel -->
            <div class="text-base text-gray-800 mt-1 md:mt-0 leading-relaxed">
              <a href="{{ localized_route('news.detail', $item->slug) }}"
                class="hover:text-sky-600 hover:underline">{{ $item->title }}</a>
            </div>

            <!-- Tanggal Artikel -->
            <div class="text-sm md:text-base text-gray-600">
              {{ app()->getLocale() === 'id' ? $item->updated_at->translatedFormat('d F Y') : $item->updated_at->format('F d, Y') }}
            </div>

            <!-- Kategori Artikel (Hanya muncul saat pencarian) -->
            @if ($isSearch)
              <div class="text-sm md:text-base text-gray-500">
                {{ $item->category->title ?? '-' }}
              </div>
            @endif

          </div>
        @endforeach
      </div>
    </section>
  </main>
@endsection
