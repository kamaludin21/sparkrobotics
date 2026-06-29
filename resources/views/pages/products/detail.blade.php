@php
  $mediaType = $product->hero_media_type ?? 'image';

  // Tentukan sumber (src) berdasarkan tipe media yang dipilih
  if ($mediaType === 'image') {
      $src = $product->hero_image_path ? Storage::url($product->hero_image_path) : null;
  } else {
      $src = $product->video_id;
  }

  $bgImage = [
      'type' => $mediaType,
      'src' => $src,
      'alt' => $product->title ?? 'Product Media',
  ];
@endphp
@extends('layout.app', ['activePage' => 'products'])
@section('content')
  <main>
    <x-sections.hero :title="$product->title_section" :subtitle="$product->subtitle_section" inquiryText="Place an Inquiry" :background="$bgImage" />
    {{-- Product Description --}}
    <section class="main-wrapper mt-24 md:mt-32 px-4">
      <div class="max-w-4xl mx-auto text-center mb-6">
        <p
          class="bg-linear-to-r from-sky-600 to-teal-500 bg-clip-text text-5xl font-semibold text-transparent md:text-6xl">
        </p>
        <div class="w-full text-center space-y-4">
          <p
            class="bg-linear-to-r from-sky-600 to-teal-500 bg-clip-text text-5xl font-semibold text-transparent md:text-6xl">
            {{ $product->title }}</p>

          <div class="text-lg font-medium text-slate-700">
            {!! $product->content !!}
          </div>

        </div>

      </div>
    </section>
    {{-- Product Description --}}

    {{-- Showcase --}}
    <section class="mt-24 w-full overflow-x-hidden bg-sky-600 md:mt-32">
      <div class="bg-white pb-3">
        <div class="mx-auto w-full px-4 md:max-w-4xl lg:max-w-7xl">
          <p class="text-5xl font-semibold text-slate-700 md:text-6xl">Product</p>

        </div>
      </div>
      <div class="mx-auto w-full bg-sky-600 px-4 py-3 md:max-w-4xl lg:max-w-7xl">
        <p class="text-5xl font-semibold text-white md:text-6xl">Showcase</p>
      </div>

      <div class="mx-auto flex w-full flex-col gap-3 pb-4 pl-4 md:max-w-4xl lg:max-w-7xl lg:flex-row lg:gap-12"
        x-data="{
            isDown: false,
            startX: 0,
            scrollLeft: 0,
            startDragging(e) {
                this.isDown = true;
                const pageX = e.pageX || (e.touches && e.touches[0].pageX);
                this.startX = pageX - this.$refs.slider.offsetLeft;
                this.scrollLeft = this.$refs.slider.scrollLeft;
            },
            stopDragging() {
                this.isDown = false;
            },
            drag(e) {
                if (!this.isDown) return;
                e.preventDefault();
                const pageX = e.pageX || (e.touches && e.touches[0].pageX);
                const x = pageX - this.$refs.slider.offsetLeft;
                const walk = (x - this.startX) * 1.5;
                this.$refs.slider.scrollLeft = this.scrollLeft - walk;
            },
            slidePrev() {
                // Bergeser dinamis mengikuti lebar item + gap (16px)
                const itemWidth = this.$refs.slider.firstElementChild.offsetWidth + 16;
                this.$refs.slider.scrollBy({ left: -itemWidth, behavior: 'smooth' });
            },
            slideNext() {
                const itemWidth = this.$refs.slider.firstElementChild.offsetWidth + 16;
                this.$refs.slider.scrollBy({ left: itemWidth, behavior: 'smooth' });
            }
        }">
        <div
          class="no-scrollbar order-1 mt-0 -mr-[calc(50vw-50%)] flex w-auto gap-4 overflow-x-auto pr-4 pb-2 lg:order-2 lg:-mt-12 lg:flex-1 lg:pb-0"
          x-ref="slider" @mousedown="startDragging" @mouseleave="stopDragging" @mouseup="stopDragging" @mousemove="drag"
          @touchstart="startDragging" @touchend="stopDragging" @touchmove="drag">
          @foreach ($product->showcase_images as $item)
            <div
              class="h-72 w-[85%] shrink-0 overflow-hidden rounded-3xl bg-slate-200/30 select-none md:h-72 md:w-auto md:min-w-[calc(32%-1rem)]">
              <img src="{{ Storage::url($item) }}" draggable="false"
                class="pointer-events-none h-full w-full object-cover" />
            </div>
          @endforeach
        </div>

        <div class="flex-justify-between order-2 flex w-full items-end gap-2 lg:order-1 lg:w-1/4">
          <button @click="slidePrev()"
            class="rounded-full bg-white p-2 ring-1 ring-slate-700 transition-colors hover:bg-slate-100">
            <x-icons.chevron-right class="h-8 w-auto rotate-180 text-slate-700" />
          </button>

          <button @click="slideNext()"
            class="rounded-full bg-white p-2 ring-1 ring-slate-700 transition-colors hover:bg-slate-100">
            <x-icons.chevron-right class="h-8 w-auto text-slate-700" />
          </button>
        </div>
      </div>
    </section>

    {{-- Showcase --}}

    {{-- Fitur --}}
    <section class="main-wrapper mt-24 md:mt-32 px-4">
      <div class="max-w-2xl mx-auto text-center mb-6">
        <p class="text-5xl md:text-6xl text-slate-700 font-semibold">Rich of Features</p>
      </div>
      <div class="bg-slate-200 p-4 md:p-6 rounded-4xl">
        <div class="columns-1 gap-4 sm:columns-2">
          @foreach ($product->features_images as $item)
            <div class="mb-4 break-inside-avoid">
              <img src="{{ Storage::url($item) }}" alt=""
                class="h-auto w-full rounded-xl shadow-md transition-shadow duration-300 hover:shadow-xl" />
            </div>
          @endforeach
        </div>
      </div>

    </section>

    {{-- Product Spec: ref -> https://emlid.com/reachrs4pro/ --}}
    <section class="main-wrapper mt-24 md:mt-32 flex flex-col md:flex-row gap-6 px-4">
      <div class="w-full mb-0 md:mb-6 space-y-4 md:w-1/2 ">
        <p class="text-5xl md:text-6xl text-slate-700 font-semibold">Specification</p>
        <div class="text-base text-slate-600 font-medium">
          <a href="{{ Storage::url($product->datasheet_file_path) }}" download>
            <div
              class="border-b hover:bg-slate-300 cursor-pointer border-slate-400 border-dashed w-fit flex items-center gap-1">
              Reach <span class="italic">{{ $product->title }}</span> Datasheet <span>
                <x-icons.download class="h-5 w-auto" />
              </span>
            </div>
          </a>
          <div class="font-mono">
            {{ $product->size }}
          </div>
        </div>
      </div>
      <div x-data="{ activeTab: 0 }" class="w-full md:w-2/3 overflow-hidden">
        <div class="flex flex-nowrap overflow-x-auto no-scrollbar border-b border-slate-800">
          @foreach ($product->specifications as $index => $specGroup)
            <button @click="activeTab = {{ $index }}"
              :class="activeTab === {{ $index }} ? 'border-slate-900' :
                  'text-slate-600 border-transparent hover:text-slate-500 hover:bg-slate-800/30'"
              class="flex-1 text-left px-6 py-4 text-sm font-medium border transition-all whitespace-nowrap">
              {{ $specGroup['title'] }}
            </button>
          @endforeach
        </div>
        <div class="relative min-h-[300px]">
          @foreach ($product->specifications as $index => $specGroup)
            <div x-show="activeTab === {{ $index }}" x-transition:enter="transition ease-out duration-300"
              x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
              class="absolute inset-0 py-6 md:py-8" style="display: none;">
              <div class="grid grid-cols-1 gap-x-12 gap-y-2 text-slate-800">
                @foreach ($specGroup['items'] as $item)
                  <div class="flex justify-between py-3 border-b border-slate-800/50">
                    <span class="text-slate-600">{{ $item['label'] }}</span>
                    <span class="text-right font-medium">{{ $item['value'] }}</span>
                  </div>
                @endforeach
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <section class="py-20 md:py-32 bg-slate-100">
      <div class="main-wrapper px-4" x-data="{
          isDown: false,
          startX: 0,
          scrollLeft: 0,
          startDragging(e) {
              // Nonaktifkan fungsi drag jika di layar desktop (karena sudah berbentuk grid statis)
              if (window.innerWidth >= 1024) return;
              this.isDown = true;
              const pageX = e.pageX || (e.touches && e.touches[0].pageX);
              this.startX = pageX - this.$refs.slider.offsetLeft;
              this.scrollLeft = this.$refs.slider.scrollLeft;
          },
          stopDragging() {
              this.isDown = false;
          },
          drag(e) {
              if (!this.isDown) return;
              e.preventDefault();
              const pageX = e.pageX || (e.touches && e.touches[0].pageX);
              const x = pageX - this.$refs.slider.offsetLeft;
              const walk = (x - this.startX) * 1.5;
              this.$refs.slider.scrollLeft = this.scrollLeft - walk;
          },
          slidePrev() {
              const itemWidth = this.$refs.slider.firstElementChild.offsetWidth + 16; // 16px adalah gap
              this.$refs.slider.scrollBy({ left: -itemWidth, behavior: 'smooth' });
          },
          slideNext() {
              const itemWidth = this.$refs.slider.firstElementChild.offsetWidth + 16;
              this.$refs.slider.scrollBy({ left: itemWidth, behavior: 'smooth' });
          }
      }">

        <div class="flex items-end justify-between mb-8">
          <div>
            <p class="text-4xl md:text-5xl text-slate-700 font-semibold">{{ t('productsPage_other_section') }}</p>
          </div>

          <div class="flex gap-2 lg:hidden">
            <button @click="slidePrev()"
              class="p-2 bg-white rounded-full ring-1 ring-slate-300 hover:bg-slate-100 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 rotate-180 text-slate-700" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
              </svg>
            </button>
            <button @click="slideNext()"
              class="p-2 bg-white rounded-full ring-1 ring-slate-300 hover:bg-slate-100 transition">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>

        <div x-ref="slider" @mousedown="startDragging" @mouseleave="stopDragging" @mouseup="stopDragging"
          @mousemove="drag" @touchstart="startDragging" @touchend="stopDragging" @touchmove="drag"
          class="flex lg:grid lg:grid-cols-4 gap-4 overflow-x-auto lg:overflow-visible no-scrollbar cursor-grab active:cursor-grabbing lg:cursor-auto pb-4">

          @forelse ($otherProducts as $item)
            <div
              class="w-full shrink-0 h-full flex flex-col bg-white border border-slate-200 rounded-3xl overflow-hidden group select-none transition hover:shadow-lg hover:border-sky-200">
              <div class="h-56 shrink-0 bg-slate-200 overflow-hidden relative">
                @if (!empty($item->thumbnail_image))
                  <img src="{{ Storage::url($item->thumbnail_image) }}" alt="{{ $item->title }}" loading="lazy"
                    class="w-full h-full object-cover pointer-events-none transition-transform duration-500 group-hover:scale-105">
                @else
                  <div class="absolute inset-0 flex items-center justify-center bg-slate-200 text-slate-400">
                    <span class="text-sm">No Image</span>
                  </div>
                @endif
              </div>
              <div class="p-6 flex-1 flex flex-col justify-between">
                <div>
                  <h3 class="text-xl font-bold text-slate-800 mb-1">{{ $item->title }}</h3>
                  <p class="text-slate-500 text-sm mb-4 line-clamp-2">{{ $item->title_section }}</p>
                </div>
                <a href="{{ localized_route('products.show', $item->slug) }}"
                  aria-label="Lihat detail untuk {{ $item->title }}"
                  class="block w-full rounded-lg bg-slate-100 px-4 py-2 text-center text-sm font-semibold text-slate-700 ring-1 ring-slate-200 transition-colors duration-300 group-hover:bg-sky-600 group-hover:text-white">
                  {{ t('productsIndex_detail_button') }}
                </a>
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

          {{-- <div
            class="w-full shrink-0 h-full flex flex-col bg-white border border-slate-200 rounded-3xl overflow-hidden group select-none transition hover:shadow-lg hover:border-sky-200">
            <div class="h-56 shrink-0 bg-slate-200 overflow-hidden relative">
              <img
                src="https://shop.unitree.com/cdn/shop/files/df9f333424ff6cc6164ce421b019fb94_a6f832b0-479e-4294-ac75-6516208b91f4_900x.png"
                alt="Unitree Aliengo"
                class="w-full h-full object-cover pointer-events-none transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-bold text-slate-800 mb-1">Unitree Go2 Pro</h3>
                <p class="text-slate-500 text-sm mb-4 line-clamp-2">The next generation standard for bionic quadruped
                  robots</p>
              </div>
              <button
                class="text-sm font-semibold text-slate-800 bg-slate-200 px-4 py-2 rounded-full hover:bg-slate-200 transition self-start">
                Detail
              </button>
            </div>
          </div>

          <div
            class="w-full shrink-0 h-full flex flex-col bg-white border border-slate-200 rounded-3xl overflow-hidden group select-none transition hover:shadow-lg hover:border-sky-200">
            <div class="h-56 shrink-0 bg-slate-200 overflow-hidden relative">
              <img src="https://shop.unitree.com/cdn/shop/files/24_900x.png" alt="Unitree Aliengo"
                class="w-full h-full object-cover pointer-events-none transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-bold text-slate-800 mb-1">Unitree B2</h3>
                <p class="text-slate-500 text-sm mb-4 line-clamp-2">Industrial grade robot dog built for extreme
                  performance</p>
              </div>
              <button
                class="text-sm font-semibold text-slate-800 bg-slate-200 px-4 py-2 rounded-full hover:bg-slate-200 transition self-start">
                Detail
              </button>
            </div>
          </div>

          <div
            class="w-full shrink-0 h-full flex flex-col bg-white border border-slate-200 rounded-3xl overflow-hidden group select-none transition hover:shadow-lg hover:border-sky-200">
            <div class="h-56 shrink-0 bg-slate-200 overflow-hidden relative">
              <img src="https://shop.unitree.com/cdn/shop/files/23_900x.png" alt="Unitree Aliengo"
                class="w-full h-full object-cover pointer-events-none transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-bold text-slate-800 mb-1">Unitree H1</h3>
                <p class="text-slate-500 text-sm mb-4 line-clamp-2">General-purpose humanoid robot with highest speed</p>
              </div>
              <button
                class="text-sm font-semibold text-slate-800 bg-slate-200 px-4 py-2 rounded-full hover:bg-slate-200 transition self-start">
                Detail
              </button>
            </div>
          </div>

          <div
            class="w-full shrink-0 h-full flex flex-col bg-white border border-slate-200 rounded-3xl overflow-hidden group select-none transition hover:shadow-lg hover:border-sky-200">
            <div class="h-56 shrink-0 bg-slate-200 overflow-hidden relative">
              <img src="https://shop.unitree.com/cdn/shop/files/21_900x.png?v=1718274083" alt="Unitree Aliengo"
                class="w-full h-full object-cover pointer-events-none transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="p-6 flex-1 flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-bold text-slate-800 mb-1">Aliengo</h3>
                <p class="text-slate-500 text-sm mb-4 line-clamp-2">Robust AI robot for advanced research.</p>
              </div>
              <button
                class="text-sm font-semibold text-slate-800 bg-slate-200 px-4 py-2 rounded-full hover:bg-slate-200 transition self-start">
                Detail
              </button>
            </div>
          </div> --}}

        </div>
      </div>
    </section>
    <section class="bg-radial-[at_50%_75%] from-sky-400 via-sky-600 to-sky-800 to-90% py-20 md:py-32 px-4">
      <div class="flex flex-col lg:flex-row gap-6 items-center justify-between main-wrapper ">
        <div class="max-w-xl">
          <h2 class="text-5xl font-medium font-jakarta text-slate-50 mb-4 max-w-3xl mx-auto">Experience the Product in
            Action</h2>
          <p class="text-xl font-jakarta text-slate-100 mb-6 max-w-3xl mx-auto">See every feature, detail, and
            capability
            designed to support your daily needs.</p>
        </div>
        <div class="flex justify-center gap-4">
          <a href="{{ localized_route('about.contact') }}"
            class="bg-black px-5 py-2 rounded-full text-white font-semibold text-base">
            Place an Inquiry
          </a>
        </div>
      </div>
    </section>
  </main>
@endsection
