@extends('layout.app', ['activePage' => 'home'])

@section('content')
  <main class="">
    {{-- CTA --}}
    <section class="main-wrapper pt-24 md:pt-24 px-4">
      <div
        class="bg-radial-[at_50%_75%] from-sky-400 via-sky-600 to-sky-900 to-90% h-auto flex items-center rounded-3xl flex-col justify-between ">
        <div class="max-w-2xl mx-auto px-3 md:px-6 py-12 rounded-lg text-center">
          <div class="inline-flex items-center gap-2 px-2 py-1 mb-6 rounded-md bg-slate-900/30">
            <span class="w-2 h-2 rounded-full bg-blue-500 animate-pulse"></span>
            <span class="text-xs font-jakarta text-slate-200 uppercase tracking-wider font-semibold">
              {{ t('home_title') }}
            </span>
          </div>
          <h2 class="text-5xl md:text-6xl font-medium font-jakarta text-white mb-4 ">{{ t('brand_spark_robotics') }}</h2>
          <p class="text-xl font-jakarta text-slate-100 italic mb-6">{{ t('home_cta_tagline') }}</p>
          <div class="flex justify-center gap-2 md:gap-4">
            <a href="{{ locale_route('about.contact') }}"
              class="bg-slate-800 px-5 py-2 rounded-full text-white font-semibold text-base">
              {{ t('home_cta_contact') }}
            </a>
            <a href="{{ locale_route('products.index') }}"
              class="bg-white px-5 py-2 rounded-full text-slate-800   font-semibold text-base">
              {{ t('home_cta_catalogs') }}
            </a>
          </div>
        </div>
        <div class="flex justify-center items-end">
          <img src="{{ asset('images/robotic.png') }}" alt="Hero Image"
            class="w-full h-44 md:h-72 object-contain md:object-cover object-bottom">
        </div>
      </div>
    </section>
    {{-- CTA --}}

    {{-- Customer Slide --}}
    @if (count($settings->clients) > 0)
      <section class="pt-10">
        <div class="w-full relative flex overflow-hidden " x-data="{ hover: false }" @mouseenter="hover = true"
          @mouseleave="hover = false">
          <div class="flex whitespace-nowrap animate-marquee" :style="hover ? 'animation-play-state: paused;' : ''">
            <div class="flex min-w-full shrink-0 items-center justify-around gap-2 px-2">
              @foreach ($settings->clients as $client)
                <div class="w-32 md:w-48 flex justify-center items-center">
                  @if (!empty($client['logo']))
                    <img src="{{ Storage::url($client['logo']) }}" alt="{{ $client['company_name'] ?? '' }}"
                      class="h-12 md:h-14 object-contain transition-all duration-300">
                  @endif
                </div>
              @endforeach

            </div>
            <div class="flex min-w-full shrink-0 items-center justify-around gap-2 px-2" aria-hidden="true">
              @foreach ($settings->clients as $client)
                <div class="w-32 md:w-48 flex justify-center items-center">
                  @if (!empty($client['logo']))
                    <img src="{{ Storage::url($client['logo']) }}" alt="{{ $client['company_name'] ?? '' }}"
                      class="h-12 md:h-14 object-contain transition-all duration-300">
                  @endif
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </section>
    @endif
    {{-- Customer Slide --}}

    {{-- Category --}}
    <section class="main-wrapper mt-24 md:mt-32 gap-8 px-4 space-y-12">
      <div class="w-full text-center space-y-2">
        <p class="text-2xl text-slate-500 font-normal tracking-tight">{{ t('segment_subtitle') }}</p>
        <p class="text-4xl font-semibold text-slate-700 font-jakarta">{{ t('segment_title') }}</p>
      </div>
      <div class="w-full bg-white">
        <div class="grid grid-cols-2 gap-4 md:grid-cols-10 lg:grid-cols-12 md:grid-rows-2">

          <!-- Left Large Card -->
          <div class="relative overflow-hidden col-span-2 rounded-2xl md:col-span-4 lg:col-span-5 md:row-span-2 group">
            <img src="https://www-cdn.djiits.com/dps/d5687107b6b51178f6491bf89a5e701f.jpg" alt=""
              class="h-full w-full object-cover" />

            <div class="absolute inset-0 bg-black/30"></div>

            <div class="absolute bottom-0 left-0 flex h-full w-full flex-col justify-between p-6">
              <div class="text-4xl font-black leading-none text-white uppercase w-min">
                {{ t('brand_spark_robotics') }}
              </div>

              <div class="">
                <p
                  class="inline-flex items-center text-2xl font-bold uppercase leading-none font-bold tracking-tight text-slate-100 uppercase">
                  {{ t('segment_title_first') }}
                </p>

              </div>
            </div>
          </div>

          <!-- Top Middle -->
          <div class="relative overflow-hidden col-span-2 rounded-2xl md:col-span-3 lg:col-span-4 min-h-44">
            <img src="https://stag-www-cdn.djiits.com/pre/dps/bedf44783ff5ebbb210ca39d68ead198.jpg" alt=""
              class="h-full w-full object-cover" />
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="absolute bottom-4 right-4">
              <p
                class="inline-flex items-center text-2xl font-bold uppercase leading-none font-bold tracking-tight text-slate-100">
                {{ t('segment_title_second') }}
              </p>
            </div>
          </div>

          <!-- Top Right Black Card -->
          <div class="flex flex-col justify-between rounded-2xl bg-black p-4 md:p-6 md:col-span-3">
            <h3 class="text-xl md:text-2xl font-bold uppercase leading-tight text-white">
              {{ t('segment_dji_title') }}
            </h3>
            <div class="space-y-3">
              <p class="text-sm text-white/70">
                {{ t('segment_dji_description') }}
              </p>
            </div>
          </div>

          <!-- Bottom Middle Black Card -->
          <div class="flex flex-col justify-between rounded-2xl bg-black space-y-4 p-4 md:p-6 md:col-span-3">
            <h3 class="text-xl md:text-3xl font-bold md:font-black uppercase leading-tight text-white">
              {{ t('segment_ecosystem_slogan') }}
            </h3>
            <div class="flex flex-wrap gap-3 text-xs text-white/60">
              @foreach ($brands as $item)
                <span class="uppercase">{{ $item->name }}</span>
              @endforeach
            </div>
          </div>

          <!-- Bottom Right Image -->
          <div class="relative overflow-hidden col-span-2 rounded-2xl md:col-span-3 lg:col-span-4">
            <img src="https://www.unitree.com/images/eec8d82f279b440ea170982ffa80b3fa_3840x2160.jpg" alt=""
              class="h-full w-full object-cover" />
            <div class="absolute inset-0 bg-black/10"></div>
            <div class="absolute bottom-4 left-4">
              <p
                class="inline-flex items-center text-2xl font-bold leading-none font-bold tracking-tight text-slate-100 uppercase">
                {{ t('segment_title_third') }}
              </p>
            </div>
          </div>

        </div>
      </div>
    </section>
    {{-- Category --}}

    {{-- Products --}}
    <section class="main-wrapper mt-24 md:mt-32 space-y-2 px-4">
      <div class="mb-2">
        <p class="text-2xl text-slate-500 font-normal tracking-tight">{{ t('productsIndex_title') }}</p>
      </div>
      <div class="flex justify-between items-center">
        <p class="text-4xl font-semibold text-slate-700 font-jakarta">{{ t('productsIndex_subtitle') }}</p>
        <a href="{{ localized_route('products.index') }}"
          class="hidden lg:flex gap-2 items-center px-6 py-2 bg-sky-600 rounded-full text-white">
          <span>{{ t('productsIndex_btn_more') }}</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-auto">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l14 0" />
            <path d="M15 16l4 -4" />
            <path d="M15 8l4 4" />
          </svg>
        </a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-12">
        @forelse ($products as $item)
          <article class="group flex h-full flex-col overflow-hidden rounded-2xl bg-white ring-1 ring-slate-200">
            <div class="relative h-56 overflow-hidden bg-slate-100">
              @if (!empty($item->thumbnail_image))
                <img src="{{ Storage::url($item->thumbnail_image) }}" alt="{{ $item->title }}" loading="lazy"
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
                  {{ t('productsIndex_detail_button') }}
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
            <p class="text-base font-medium text-slate-600">{{ t('home_product_empty') }}</p>
          </div>
        @endforelse
      </div>
      <a href="{{ localized_route('products.index') }}"
        class="flex lg:hidden gap-2 w-fit justify-center items-center px-6 py-2 bg-sky-600 rounded-full text-white mx-auto mt-6">
        <span>{{ t('productsIndex_btn_more') }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-auto">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l14 0" />
          <path d="M15 16l4 -4" />
          <path d="M15 8l4 4" />
        </svg>
      </a>
    </section>
    {{-- Products --}}

    {{-- Why Choose Us --}}
    <section class="bg-white mt-24 md:mt-32 antialiased">
      <div class="main-wrapper px-4">
        <div class="max-w-2xl">
          <p class="text-2xl text-slate-500 font-normal tracking-tight">{{ t('chooseUs_title') }}</p>
          <h2 class="mt-2 text-4xl font-semibold text-slate-700 font-jakarta">{{ t('chooseUs_subtitle') }}</h2>
        </div>
        <!-- === BENTO GRID SECTION (Dari Referensi Gambar 1) === -->
        <div class="mt-12 grid grid-cols-1 gap-6 lg:grid-cols-3">
          <!-- Kiri: 3 Cards -->
          <div class="flex flex-col gap-6 lg:col-span-2">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <!-- Card 1 -->
              <div
                class="rounded-3xl bg-slate-50 p-8 shadow-sm ring-1 ring-slate-900/5 transition-all hover:bg-slate-100">
                <div class="mb-4">
                  <svg class="h-10 w-10 text-slate-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                  </svg>
                </div>
                <h3 class="mb-2 text-2xl font-semibold text-slate-700">{{ t('chooseUs_distributor') }}</h3>
                <p class="text-sm leading-6 text-slate-600">{{ t('chooseUs_genuine') }}</p>
              </div>

              <!-- Card 2 -->
              <div
                class="rounded-3xl bg-slate-50 p-8 shadow-sm ring-1 ring-slate-900/5 transition-all hover:bg-slate-100">
                <div class="mb-4">
                  <svg class="h-10 w-10 text-slate-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
                  </svg>
                </div>
                <h3 class="mb-2 text-2xl font-semibold text-slate-700">{{ t('chooseUs_solutions') }}</h3>
                <p class="text-sm leading-6 text-slate-600">{{ t('chooseUs_solutions_description') }}</p>
              </div>
            </div>

            <!-- Card 3 (Lebar) -->
            <div
              class="flex-1 rounded-3xl bg-slate-50 p-8 shadow-sm ring-1 ring-slate-900/5 transition-all hover:bg-slate-100">
              <div class="mb-4">
                <svg class="h-10 w-10 text-slate-800" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                </svg>
              </div>
              <h3 class="mb-2 text-2xl font-semibold text-slate-700">{{ t('chooseUs_support') }}</h3>
              <p class="max-w-xl text-sm leading-6 text-slate-600">{{ t('chooseUs_support_description') }}</p>
            </div>
          </div>

          <!-- Kanan: Card 4 (Dark Mode) -->
          <div class="flex flex-col justify-between rounded-3xl bg-slate-700 p-8 text-white shadow-xl lg:col-span-1">
            <div>
              <div class="mb-4">
                <svg class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Zm0 3h.008v.008h-.008v-.008Z" />
                </svg>
              </div>
              <h3 class="mb-2 text-2xl font-semibold">{{ t('chooseUs_industries') }}</h3>
              <p class="text-base leading-relaxed text-blue-100">{{ t('chooseUs_industries_description') }}</p>
            </div>

            <div class="mt-10">
              <a href="{{ locale_route('about.case_study') }}"
                class="group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-full bg-sky-600 px-6 font-medium text-neutral-200 duration-500 ">
                <div class="translate-x-0 opacity-100 transition group-hover:-translate-x-[150%] group-hover:opacity-0">
                  {{ t('chooseUs_btn_projects') }}</div>
                <div
                  class="absolute translate-x-[150%] opacity-0 transition group-hover:translate-x-0 group-hover:opacity-100">
                  <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="h-6 w-6">
                    <path
                      d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                      fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="mt-10 space-y-8">
          <p class="text-center text-2xl font-semibold text-slate-700">{{ t('chooseUs_brand') }}</p>
          {{-- TODO: Database insert --}}
          <!-- Brands & Clients Logos (Tab-Style) -->
          <div class="flex flex-wrap items-center justify-center gap-4 md:gap-12">
            @foreach ($brands as $item)
              <img src="{{ Storage::url($item->logo_path) }}" alt="{{ $item->name }}"
                class="h-6 md:h-10 w-auto duration-300 hover:scale-105" />
            @endforeach
          </div>
        </div>
      </div>
    </section>
    {{-- Why Choose Us --}}

    {{-- About Company --}}
    <section class="relative mx-auto mt-48 h-auto px-4 pb-10 lg:mt-72 lg:h-[30rem]">
      <div class="absolute inset-0 z-0 overflow-hidden bg-sky-800">
        <div class="absolute -top-10 -left-10">
          <x-icons.drone class="h-60 w-auto text-sky-900" />
        </div>

        <div class="absolute -right-8 -bottom-8">
          <x-icons.drone class="h-60 w-auto text-sky-900" />
        </div>
      </div>
      <div class="relative z-10 main-wrapper flex h-auto lg:h-full w-full flex-col gap-8 text-white lg:gap-0">
        <div class="relative -mt-14 lg:-mt-40" x-data="{
            scrollNext() { $refs.slider.scrollBy({ left: $refs.slider.clientWidth * 0.85, behavior: 'smooth' }); },
                scrollPrev() { $refs.slider.scrollBy({ left: -($refs.slider.clientWidth * 0.85), behavior: 'smooth' }); }
        }">
          <div x-ref="slider"
            class="flex snap-x snap-mandatory [scrollbar-width:'none'] gap-4 overflow-x-auto [-ms-overflow-style:'none'] lg:grid lg:grid-cols-4 lg:gap-8 lg:overflow-visible [&::-webkit-scrollbar]:hidden">
            @foreach ($settings->about_image as $item)
              <img src="{{ Storage::url($item) }}"
                class="h-72 w-[85%] shrink-0 snap-center rounded-2xl object-cover shadow-lg duration-200 lg:h-96 lg:w-full hover:lg:-mt-4"
                alt="About Us" />
            @endforeach
          </div>
          <div class="mt-6 flex justify-center gap-4 lg:hidden">
            <button @click="scrollPrev"
              class="rounded-full bg-white/20 p-3 backdrop-blur-sm transition hover:bg-white/40">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>
            <button @click="scrollNext"
              class="rounded-full bg-white/20 p-3 backdrop-blur-sm transition hover:bg-white/40">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="h-5 w-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </button>
          </div>
        </div>
        <div class="mt-0 flex flex-col items-start gap-6 pt-4 lg:mt-auto lg:flex-row lg:gap-4">
          <div class="space-y-4 lg:w-1/3 lg:space-y-6">
            <h2 class="font-jakarta max-w-xs leading-tight font-medium text-4xl">{{ t('companyIndex_title') }}</h2>
          </div>
          <div class="flex-1">
            <p class="text-lg leading-7 text-white/90 lg:text-xl">{{ t('companyIndex_subtitle') }}</p>
          </div>
        </div>
      </div>
    </section>
    {{-- About Company --}}

    {{-- Latest blog --}}
    <section class="main-wrapper py-24 md:py-32 px-4">
      <div class="mb-2">
        <p class="text-2xl text-slate-500 font-normal tracking-tight">{{ t('blogIndex_title') }}</p>
      </div>
      <div class="flex justify-between items-end">
        <p class="text-4xl font-semibold text-slate-700 font-jakarta">{{ t('blogIndex_subtitle') }}</p>
        <a href="{{ localized_route('news.index') }}"
          class="hidden md:flex gap-2 items-center px-6 py-2 bg-sky-600 rounded-full text-white">
          <span>{{ t('blogIndex_btn_more') }}</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
            class="h-7 w-auto">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l14 0" />
            <path d="M15 16l4 -4" />
            <path d="M15 8l4 4" />
          </svg>
        </a>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
        @forelse ($articles as $item)
          <div class="bg-white rounded-2xl p-4 ring ring-slate-200">
            <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}"
              class="w-full object-cover mx-auto h-56 rounded-xl">
            <div class="px-2 py-4">
              <a href=""
                class="line-clamp-3 text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
                {{ $item->title }}</a>
              <p class="text-slate-600 mt-2">
                {{ app()->getLocale() === 'id' ? $item->updated_at->translatedFormat('d F Y') : $item->updated_at->format('F d, Y') }}
              </p>
            </div>
          </div>
        @empty
          <div
            class="col-span-full bg-white border border-dashed border-slate-300 rounded-2xl py-16 text-center text-slate-500 space-y-2">
            <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor"
              viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <p class="text-base font-medium text-slate-600">{{ t('home_product_empty') }}</p>
          </div>
        @endforelse
      </div>
      <a href="{{ localized_route('news.index') }}"
        class="flex md:hidden gap-2 items-center px-6 py-2 bg-sky-600 rounded-full text-white mt-6 w-fit mx-auto">
        <span>{{ t('blogIndex_btn_more') }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-auto">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l14 0" />
          <path d="M15 16l4 -4" />
          <path d="M15 8l4 4" />
        </svg>
      </a>
    </section>
    {{-- Latest blog --}}

    {{-- CTA --}}
    <section class="main-wrapper px-0 md:px-4 my-0 md:my-32">
      <div
        class="bg-radial-[at_50%_75%] from-sky-400 via-sky-600 to-sky-800 to-90% rounded-none md:rounded-3xl text-center py-20 px-6">
        <h2 class="text-5xl font-medium font-jakarta text-slate-50 mb-4 max-w-3xl mx-auto">{{ t('ctaIndex_title') }}
        </h2>
        <p class="text-xl font-jakarta text-slate-100 mb-6 max-w-3xl mx-auto">{{ t('ctaIndex_subtitle') }}</p>
        <div class="flex justify-center gap-2 md:gap-4">
          <a href="{{ localized_route('about.contact') }}"
            class="bg-black px-3 md:px-5 py-2 rounded-full text-white   font-semibold text-base">
            {{ t('ctaIndex_btn_contact') }}
          </a>
          <a href="{{ localized_route('products.index') }}"
            class="bg-white px-3 md:px-5 py-2 rounded-full text-slate-800   font-semibold text-base">
            {{ t('ctaIndex_btn_more') }}
          </a>
        </div>
      </div>
    </section>
    {{-- CTA --}}

  </main>
@endsection
