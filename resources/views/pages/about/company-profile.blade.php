@extends('layout.app', ['activePage' => 'about'])

@section('title', __('seo.nav.about-us') . ' | SPARK Robotics')

@section('content')
  @php
    $locale = app()->getLocale();
    $isId = $locale === 'id';

    // Hero
    $tagline = $isId ? $settings->tagline_id : $settings->tagline_en;
    $companyName = $isId ? $settings->company_name_id : $settings->company_name_en;
    $designation = $isId ? $settings->designation_id : $settings->designation_en;
    $heroDesc = $isId ? $settings->description_id : $settings->description_en;

    // Siapa Kami
    $sectionTitle = $isId ? $settings->section_title_id : $settings->section_title_en;
    $aboutContent = $isId ? $settings->about_id : $settings->about_en;
    $aboutImages = $settings->about_image;

    // Industri
    $industriesTitle = $isId ? $settings->industries_title_id : $settings->industries_title_en;
    $industriesSubtitle = $isId ? $settings->industries_subtitle_id : $settings->industries_subtitle_en;
    $industries = $settings->industries;

    // Dipercaya Oleh
    $brandTitle = $isId ? $settings->brand_title_id : $settings->brand_title_en;
    $brandSubtitle = $isId ? $settings->brand_subtitle_id : $settings->brand_subtitle_en;
    $clients = $settings->clients;

    // Split company name untuk efek gradient
    $nameParts = explode(' ', $companyName, 2);
    $nameFirst = $nameParts[0] ?? '';
    $nameRest = $nameParts[1] ?? '';
  @endphp

  <main class="w-full bg-white antialiased">
    {{-- ============================================= --}}
    {{-- HERO SECTION --}}
    {{-- ============================================= --}}
    <section class="relative isolate overflow-hidden bg-white">
      <div class="absolute inset-0 -z-10 h-full w-full overflow-hidden">
        <svg
          class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
          aria-hidden="true">
          <defs>
            <pattern id="tech-grid" width="40" height="40" x="50%" y="-1" patternUnits="userSpaceOnUse">
              <path d="M.5 40V.5H40" fill="none" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#tech-grid)" />
        </svg>

        <div
          class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
          aria-hidden="true">
          <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
            style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
          </div>
        </div>
      </div>

      <div class="mx-auto max-w-4xl py-24 sm:py-32 lg:py-40 text-center px-6">
        @if ($designation)
          <div class="mb-8 flex justify-center">
            <div
              class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 bg-white/50 backdrop-blur-sm">
              {{ $designation }}
            </div>
          </div>
        @endif

        <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-7xl">
          {{ $nameFirst }}
          @if ($nameRest)
            <span
              class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">{{ $nameRest }}</span>
          @endif
        </h1>

        @if ($tagline)
          <p class="mt-6 text-xl font-semibold leading-8 text-blue-600 uppercase tracking-[0.3em]">
            {{ $tagline }}
          </p>
        @endif

        @if ($heroDesc)
          <p class="mt-4 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">
            {{ $heroDesc }}
          </p>
        @endif
      </div>
    </section>

    {{-- ============================================= --}}
    {{-- SIAPA KAMI SECTION --}}
    {{-- ============================================= --}}
    <section class="main-wrapper px-4 py-16">
      <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-16 lg:items-center">
        <div>
          @if ($sectionTitle)
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $sectionTitle }}</h2>
          @endif

          @if ($aboutContent)
            <div class="mt-6 text-base leading-7 text-gray-600 prose prose-sm max-w-none">
              {!! $aboutContent !!}
            </div>
          @endif
        </div>

        @if (!empty($aboutImages) && is_array($aboutImages) && count($aboutImages) > 0)
          <div x-data="{
              images: @js($aboutImages),
              activeSlide: 0,
              nextSlide() {
                  this.activeSlide = (this.activeSlide === this.images.length - 1) ? 0 : this.activeSlide + 1;
              },
              prevSlide() {
                  this.activeSlide = (this.activeSlide === 0) ? this.images.length - 1 : this.activeSlide - 1;
              }
          }"
            class="w-full h-64 sm:h-80 lg:h-96 relative h-72 overflow-hidden group/slider rounded-2xl shadow-xl">

            <div class="w-full h-full relative">
              <template x-for="(img, idx) in images" :key="idx">
                <div x-show="activeSlide === idx" x-transition:enter="transition ease-in-out duration-500 transform"
                  x-transition:enter-start="opacity-0 scale-105" x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in-out duration-500 transform"
                  x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                  class="absolute inset-0 w-full h-full">
                  <img :src="'/storage/' + img" alt="About Image" class="w-full h-full object-contain">
                </div>
              </template>
            </div>
            <div class="absolute inset-0 bg-gradient-to-t from-transparent to-black/40 md:hidden pointer-events-none">
            </div>

            <template x-if="images.length > 1">
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
                  <template x-for="(img, idx) in images" :key="idx">
                    <button @click="activeSlide = idx"
                      :class="activeSlide === idx ? 'bg-sky-600 w-6' : 'bg-white/50 hover:bg-white w-2'"
                      class="h-2 rounded-full transition-all duration-300 focus:outline-none"></button>
                  </template>
                </div>
              </div>
            </template>
          </div>
        @endif
      </div>
    </section>

    {{-- ============================================= --}}
    {{-- INDUSTRI YANG KAMI DUKUNG --}}
    {{-- ============================================= --}}
    <section class="bg-gray-900 py-16 sm:py-24">
      <div class="main-wrapper px-4">
        <div class="mx-auto max-w-2xl lg:text-center">
          @if ($industriesTitle)
            <p class="text-3xl font-bold tracking-tight text-white sm:text-4xl">{{ $industriesTitle }}</p>
          @endif

          @if ($industriesSubtitle)
            <p class="mt-4 text-center text-lg leading-8 text-slate-200 max-w-3xl mx-auto">
              {{ $industriesSubtitle }}
            </p>
          @endif
        </div>

        @if (count($industries) > 0)
          <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
            <dl class="grid max-w-xl grid-cols-2 gap-x-6 gap-y-6 lg:max-w-none lg:grid-cols-4 sm:grid-cols-3">
              @foreach ($industries as $industry)
                <div
                  class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
                  <dt class="text-base font-semibold leading-7 text-white text-center">
                    {{ $isId ? $industry['industries_name_id'] ?? '' : $industry['industries_name_en'] ?? '' }}
                  </dt>
                </div>
              @endforeach
            </dl>
          </div>
        @endif
      </div>
    </section>

    {{-- ============================================= --}}
    {{-- DIPERCAYA OLEH --}}
    {{-- ============================================= --}}
    <section class="py-16 sm:py-24 bg-white">
      <div class="main-wrapper px-4">
        @if ($brandTitle)
          <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ $brandTitle }}</h2>
        @endif

        @if ($brandSubtitle)
          <p class="mt-4 text-center text-lg leading-8 text-gray-600 max-w-3xl mx-auto">
            {{ $brandSubtitle }}
          </p>
        @endif

        @if (count($clients) > 0)
          <div class="mt-12 flex justify-center gap-6 flex-wrap max-w-5xl mx-auto items-center">
            @foreach ($clients as $client)
              @if (!empty($client['logo']))
                <img class="w-auto h-14 object-contain" src="{{ Storage::url($client['logo']) }}"
                  alt="{{ $client['company_name'] ?? '' }}" />
              @else
                <span class="text-sm font-medium text-gray-400 px-4 py-2 rounded-lg bg-gray-50 border border-gray-200">
                  {{ $client['company_name'] ?? '' }}
                </span>
              @endif
            @endforeach
          </div>
        @endif
      </div>
    </section>

    {{-- ============================================= --}}
    {{-- Akreditasi & Sertifikasi --}}
    {{-- ============================================= --}}
    <section class="mx-auto max-w-7xl px-4 py-12 font-sans sm:px-6 lg:px-8">
      <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
        {{ t('contactPage_certification') }}</h2>
      <div class="grid grid-cols-1 gap-x-12 gap-y-10 md:grid-cols-2 mt-12">
        @foreach ($certification as $item)
          <div class="flex items-start gap-4">
            <div class="flex h-16 w-16 flex-shrink-0 items-center justify-center">
              <img src="{{ Storage::url($item->image) }}" alt="">
            </div>
            <div>
              <h3 class="mb-2 text-lg leading-tight font-medium text-gray-900">{{ $item->title }}</h3>
              <p class="text-base leading-relaxed text-gray-600">{{ $item->subtitle }}
              </p>
            </div>
          </div>
        @endforeach
      </div>
    </section>
  </main>
@endsection
