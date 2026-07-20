@extends('layout.app', ['activePage' => 'news'])

@section('title', __('seo.nav.news') . ' | SPARK Robotics')

@section('content')
  <main class="main-wrapper px-4 py-24 lg:py-32 overflow-x-hidden">
    <x-layout.news-nav :title="t('newsPage_main_title')" active="news" />

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

    <section class="flex flex-col lg:flex-row gap-10 w-full">

      <div class="w-full lg:w-2/3 flex flex-col">
        @if ($featured)
          @if (isset($featured->type) && $featured->type === 'video' && $featured->video_url)
            <iframe class="w-full aspect-[16/9] ring ring-slate-200 rounded-xl" src="{{ $featured->embed_video_url }}"
              title="{{ $featured->title }}" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
            </iframe>
          @else
            <img class="w-full h-auto aspect-[16/9] object-cover ring ring-slate-200 rounded-xl"
              src="{{ $featured->image ? Storage::url($featured->image) : 'https://via.placeholder.com/700x400' }}"
              alt="{{ $featured->title }}">
          @endif

          <div class="flex flex-col sm:flex-row mt-4 items-start gap-4 sm:gap-6 w-full">
            <a href="{{ localized_route('news.detail', $featured->slug) }}"
              class="hover:underline font-jakarta text-2xl sm:text-3xl md:text-4xl font-medium text-slate-700 hover:text-sky-600 w-full sm:w-3/4">
              {{ $featured->title }}
            </a>
            <div class="text-base sm:text-lg text-slate-600 w-full sm:w-1/4 sm:text-right shrink-0">
              <p class="font-medium text-sky-600 sm:text-slate-600">{{ $featured->category->title ?? 'Uncategorized' }}
              </p>
              <p>
                {{ app()->getLocale() === 'id' ? $featured->updated_at->translatedFormat('d F Y') : $featured->updated_at->format('F d, Y') }}
              </p>
            </div>
          </div>
        @endif
      </div>

      <div class="w-full lg:w-1/3 grid content-start divide-y divide-dashed divide-slate-500">
        @foreach ($sidebar as $side_item)
          <div class="grid py-4">
            <div class="inline-flex items-center gap-2 text-sm sm:text-base text-slate-600 mb-1">
              <p class="font-medium">{{ $side_item->category->title ?? 'Uncategorized' }}</p>
              <span>&#8226;</span>
              <p>
                {{ app()->getLocale() === 'id' ? $side_item->updated_at->translatedFormat('d F Y') : $side_item->updated_at->format('F d, Y') }}
              </p>
            </div>
            <a href="{{ localized_route('news.detail', $side_item->slug) }}"
              class="text-slate-700 hover:text-sky-600 hover:underline text-lg sm:text-xl font-semibold font-jakarta leading-snug">
              {{ $side_item->title }}
            </a>
          </div>
        @endforeach
      </div>
    </section>

    <section class="py-10 space-y-6">
      <p class="text-3xl font-bold text-slate-700">{{ t('newsPage_section_title') }}</p>
      <div class="w-full">
        <div
          class="hidden md:grid md:grid-cols-[1fr_150px_200px] gap-6 border-b border-slate-200 pb-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">
          <div>{{ t('newsPage_table_title') }}</div>
          <div>{{ t('newsPage_table_date') }}</div>
          <div>{{ t('newsPage_table_category') }}</div>
        </div>
        @foreach ($articles as $item)
          <div class="flex flex-col md:grid md:grid-cols-[1fr_150px_200px] gap-2 md:gap-6 border-b border-slate-200 py-5">
            <div class="text-base text-slate-800 mt-1 md:mt-0 leading-relaxed">
              <a href="{{ localized_route('news.detail', $item->slug) }}"
                class="hover:text-sky-600 hover:underline">{{ $item->title }}</a>
            </div>
            <div class="text-sm md:text-base text-slate-600 md:text-slate-800">
              <span
                class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Date:</span>
              {{ app()->getLocale() === 'id' ? $item->updated_at->translatedFormat('d F Y') : $item->updated_at->format('M d, Y') }}
            </div>
            <div class="text-sm md:text-base text-slate-500">
              <span
                class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Category:</span>
              {{ $item->category->title ?? 'Uncategorized' }}
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </main>
@endsection
