@extends('layout.app')

@section('content')
  <main class="">
    {{-- CTA --}}
    <section class="mx-auto container pt-24 px-2 mx:px-0">
      <div
        class="bg-radial-[at_50%_75%] from-sky-400 via-sky-600 to-sky-900 to-90% h-auto flex items-center rounded-3xl flex-col justify-between ">
        {{-- <div
        class="pattern-background h-auto flex items-center rounded-3xl flex-col justify-between "> --}}
        <div class="container max-w-2xl mx-auto px-6 py-12 rounded-lg text-center">
          <h2 class="text-5xl md:text-6xl font-medium font-jakarta text-white mb-4 ">Spark Robotics <br> <span
              class="text-black italic">and</span> Drones</h2>
          <p class="text-xl font-jakarta text-gray-200 mb-6">Best Solution for Industrial & Creative Needs. With
            professional expertise and cutting-edge technology.</p>
          <div class="flex justify-center gap-4">
            <a href="#produk" class="bg-black px-5 py-2 rounded-full text-white   font-semibold text-base">
              Hubungi Kami
            </a>
            <a href="#produk" class="bg-white px-5 py-2 rounded-full text-gray-800   font-semibold text-base">
              Lihat Katalog
            </a>
          </div>
        </div>
        <div class="flex justify-center">
          <img src="{{ asset('images/robotic.png') }}" alt="Hero Image" class="w-full h-72 object-cover rounded-lg">
        </div>
      </div>
    </section>
    {{-- CTA --}}

    {{-- Category --}}
    <section class="container mx-auto mt-24 md:mt-48 gap-8 px-2 md:px-0 space-y-16">
      <div class="w-full text-center space-y-4">
        <p class="text-3xl text-slate-700 font-bold">Products Segment</p>
        <p class="text-5xl text-slate-600">Our Wide Range of Robotics and Drones Segments.</p>
      </div>
      <div class="w-full bg-white">
        <div class="grid grid-cols-1 gap-4 md:grid-cols-12 md:grid-rows-2">

          <!-- Left Large Card -->
          <div class="relative overflow-hidden rounded-2xl md:col-span-6 md:row-span-2">
            <img src="https://images.unsplash.com/photo-1517466787929-bc90951d0974?q=80&w=1200&auto=format&fit=crop"
              alt="" class="h-full w-full object-cover" />

            <div class="absolute inset-0 bg-black/30"></div>

            <div class="absolute bottom-0 left-0 flex h-full w-full flex-col justify-between p-6">
              <div class="text-4xl font-black leading-none text-white">
                WE<br />
                ARE<br />
                RC
              </div>

              <div class="space-y-4">
                <h2 class="max-w-xs text-2xl font-bold uppercase leading-tight text-white">
                  A Special Away Jersey For Every Nation
                </h2>

                <button
                  class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm font-medium text-black">
                  View Collection
                  <span>↗</span>
                </button>
              </div>
            </div>
          </div>

          <!-- Top Middle -->
          <div class="relative overflow-hidden rounded-2xl md:col-span-4">
            <img src="https://images.unsplash.com/photo-1504593811423-6dd665756598?q=80&w=1200&auto=format&fit=crop"
              alt="" class="h-full w-full object-cover" />

            <div class="absolute inset-0 bg-black/10"></div>

            <div class="absolute bottom-4 right-4">
              <button class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm font-medium text-black">
                View Collection
                <span>↗</span>
              </button>
            </div>
          </div>

          <!-- Top Right Black Card -->
          <div class="flex flex-col justify-between rounded-2xl bg-black p-6 md:col-span-2">
            <div class="text-sm text-white/70">
              ⚽ Champions League
            </div>

            <div class="space-y-3">
              <h3 class="text-2xl font-bold uppercase leading-tight text-white">
                Champions League Jersey Collection
              </h3>

              <p class="text-sm text-white/70">
                Explore our Champions League Jersey Edition now available in store.
              </p>
            </div>
          </div>

          <!-- Bottom Middle Black Card -->
          <div class="flex flex-col justify-between rounded-2xl bg-black p-6 md:col-span-3">
            <div>
              <h3 class="text-3xl font-black uppercase leading-tight text-white">
                Explore Jerseys From Every Team, Across Every League
              </h3>
            </div>

            <div class="space-y-4">
              <p class="text-sm text-white/70">
                From every league, every club. Find the one that represents you.
              </p>

              <div class="flex flex-wrap gap-3 text-xs text-white/60">
                <span>Premier League</span>
                <span>La Liga</span>
                <span>Serie A</span>
                <span>Bundesliga</span>
              </div>
            </div>
          </div>

          <!-- Bottom Right Image -->
          <div class="relative overflow-hidden rounded-2xl md:col-span-3">
            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1200&auto=format&fit=crop"
              alt="" class="h-full w-full object-cover" />

            <div class="absolute inset-0 bg-black/10"></div>

            <div class="absolute bottom-4 right-4">
              <button class="inline-flex items-center gap-2 rounded-md bg-white px-4 py-2 text-sm font-medium text-black">
                View Collection
                <span>↗</span>
              </button>
            </div>
          </div>

        </div>
      </div>
    </section>
    {{-- Category --}}

    {{-- Products --}}
    <section id="produk" class="container mx-auto mt-24 md:mt-48 space-y-2 px-2 md:px-0">
      <div class="mb-6">
        <p class="text-xl md:text-3xl text-slate-700 font-bold">Our Products</p>
      </div>
      <div class="flex justify-between items-end">
        <p class="text-3xl md:text-5xl max-w-2xl text-slate-600">Explore Diverse Range of Products.</p>
        <button class="hidden md:flex gap-2 items-center px-6 py-2 bg-sky-600 rounded-full text-white">
          <span>Explore More</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-auto">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l14 0" />
            <path d="M15 16l4 -4" />
            <path d="M15 8l4 4" />
          </svg>
        </button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
        <div class="bg-white rounded-2xl p-6 shadow-md">
          <img
            src="http://cdn.sanity.io/images/mgxz50fq/production-v3-red/cd1548472b57be4da19c8f202ba4cdfe3148f76b-2930x1120.png?w=2000&fit=max&auto=format"
            alt="Produk 1" class="w-auto mx-auto h-48 rounded-lg">
          <a class="#" class="">
            <h3 class="text-2xl font-semibold mt-4 text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              Skydio X10</h3>
          </a>
          <p class="text-slate-600 mt-2">Packing more megapixels and better optics than any drone its size.</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-md">
          <img
            src="https://i0.wp.com/halorobotics.com/wp-content/uploads/2026/04/unitree-go2-edu-plus-robotic-dog-mid-360.webp?resize=768%2C768&ssl=1"
            alt="Produk 1" class="w-auto mx-auto h-48 rounded-lg">
          <a class="#" class="">
            <h3 class="text-2xl font-semibold mt-4 text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              Unitree Go2 Edu Plus</h3>
          </a>
          <p class="text-slate-600 mt-2">The robot navigation algorithms are currently in a pilot phase.</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-md">
          <img src="https://i0.wp.com/halorobotics.com/wp-content/uploads/2026/03/unitree-g1-2.png?w=576&ssl=1"
            alt="Produk 1" class="w-auto mx-auto h-48 rounded-lg">
          <a class="#" class="">
            <h3 class="text-2xl font-semibold mt-4 text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              Unitree – G1 Edu Professional E</h3>
          </a>
          <p class="text-slate-600 mt-2">The robot navigation algorithms are currently in a pilot phase.</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-md">
          <img src="{{ asset('images/S10-1-300x600.png') }}" alt="Produk 1" class="w-auto mx-auto h-48 rounded-lg">
          <a class="#" class="">
            <h3 class="text-2xl font-semibold mt-4 text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              FlashBot Arm</h3>
          </a>
          <p class="text-slate-600 mt-2">
            Semi-Humanoid Embodied AI Service Robot</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-md">
          <img
            src="https://i0.wp.com/halorobotics.com/wp-content/uploads/2025/12/Dock3-%E5%B9%B3%E4%BE%A7-2-1.png?resize=394%2C394&ssl=1"
            alt="Produk 1" class="w-auto mx-auto h-48 rounded-lg">
          <a class="#" class="">
            <h3 class="text-2xl font-semibold mt-4 text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              DJI Dock 3
            </h3>
          </a>
          <p class="text-slate-600 mt-2">DJI Dock 3 is DJI's first Dock to support mobile vehicle-mounted deployment.</p>
        </div>
        <div class="bg-white rounded-xl p-6 shadow-md">
          <img src="https://cdn.pudutech.com/nav_pudu_d9_baa71e3b5b.png" alt="Produk 1"
            class="w-auto mx-auto h-48 rounded-lg">
          <a class="#" class="">
            <h3 class="text-2xl font-semibold mt-4 text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              PUDU D9
            </h3>
          </a>
          <p class="text-slate-600 mt-2">The First Full-sized Bipedal Humanoid Robot by Pudu Robotics</p>
        </div>

      </div>
      <button class="flex gap-2 items-center px-6 py-2 bg-sky-600 rounded-full text-white mx-auto mt-12">
        <span>Explore More</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
          stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" class="h-7 w-auto">
          <path stroke="none" d="M0 0h24v24H0z" fill="none" />
          <path d="M5 12l14 0" />
          <path d="M15 16l4 -4" />
          <path d="M15 8l4 4" />
        </svg>
      </button>
    </section>
    {{-- Products --}}

    {{-- BRAND --}}
    <section class="bg-slate-100 mt-24 md:mt-48">
      <div class="container py-12 text-center mx-auto space-y-12 px-2 md:px-0">
        <div class="text-center">
          <p class="text-2xl text-slate-700 font-semibold">Various Premium Brands</p>
        </div>
        <div class="flex flex-wrap justify-center items-center gap-12">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-auto" fill="none" viewBox="0 0 121 108">
            <path fill="#22211F" fill-rule="evenodd"
              d="M120.99 15.953c0 6.965-21.382 18.723-120.99 37.97V.001h108.417v8.313s12.573 1.722 12.573 7.639ZM12.804 106.95c-5.722-1.273-9.638-5.318-9.638-11.234 0-5.992 4.066-26.512 105.406-56.694v68.826H28.69c-11.97 0-14.72-.632-15.672-.851-.084-.019-.153-.035-.215-.047Z"
              clip-rule="evenodd"></path>
          </svg>
          <img src="https://www-cdn.djiits.com/dps/ff086756c6f7151c92080074044f7ac3.svg" alt="Unitree"
            class="h-12 w-auto">
          <img src="https://www.pudurobotics.com/_next/static/media/logo.851bf515.svg" alt="Skydio"
            class="h-12 w-auto">
          <img
            src="https://www.autelrobotics.com/wp-content/themes/autel/userfiles/images/2023/03/08/2023030810005703.svg"
            alt="FlashBot" class="h-12 w-auto">
        </div>
      </div>
    </section>
    {{-- BRAND --}}

    {{-- Latest blog --}}
    <section class="container mx-auto mt-24 md:mt-48 px-2 md:px-0">
      <div class="mb-6">
        <p class="text-3xl text-slate-700 font-bold">Blog and Article</p>
      </div>
      <div class="flex justify-between items-end">
        <p class="text-5xl max-w-2xl text-slate-600">Our recent blogs</p>
        <button class="flex gap-2 items-center px-6 py-2 bg-sky-600 rounded-full text-white">
          <span>Explore More</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"
            class="h-7 w-auto">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M5 12l14 0" />
            <path d="M15 16l4 -4" />
            <path d="M15 8l4 4" />
          </svg>
        </button>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
        <div class="bg-white rounded-2xl p-4 shadow-xl ring ring-slate-200">
          <img
            src="https://cdn.sanity.io/images/mgxz50fq/production-v3-red/208754dfdeecbaf983ffe7ad7c87d4c721aafbbe-3840x2160.png?w=3000&fit=max&auto=format"
            alt="Blog 1" class="w-full object-cover mx-auto h-56 rounded-xl">
          <div class="px-2 py-4">
            <h3
              class="line-clamp-3 text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              The Future of Robotics: Trends and Predictions for the Next Decade</h3>
            <p class="text-slate-600 mt-2">April 21, 2026</p>
          </div>
        </div>
        <div class="bg-white rounded-2xl p-4 shadow-xl ring ring-slate-200">
          <img src="https://cdn.pudutech.com/blog_82cccb7a7e.png" alt="Blog 1"
            class="w-full object-cover mx-auto h-56 rounded-xl">
          <div class="px-2 py-4">
            <h3
              class="line-clamp-3 text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              Smart Factory's Backbone: How PUDU T300 AMR Powers Ennoconn Technologies' End-to-End EMS Logistics</h3>
            <p class="text-slate-600 mt-2">January 30, 2026</p>
          </div>
        </div>
        <div class="bg-white rounded-2xl p-4 shadow-xl ring ring-slate-200">
          <img src="https://www-cdn.djiits.com/cms/uploads/187cd6bd8123342f34a326d78ce3f85f@770*462.png" alt="Blog 1"
            class="w-full object-cover mx-auto h-56 rounded-xl">
          <div class="px-2 py-4">
            <h3
              class="line-clamp-3 text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              DJI Releases Findings of the Most Comprehensive Independent Security Assessment of Its Drone Systems to Date
            </h3>
            <p class="text-slate-600 mt-2">Sept 1, 2025</p>
          </div>
        </div>

      </div>
    </section>
    {{-- Latest blog --}}

    {{-- About Company --}}
    <section class="relative h-[30rem] mx-auto mt-24 md:mt-80 px-2 md:px-0">

      <div class="absolute inset-0 bg-sky-800 overflow-hidden z-0">
        <div class="absolute -top-10 -left-10">
          <x-icons.drone class="h-60 w-auto text-sky-900" />
        </div>

        <div class="absolute -right-8 -bottom-8">
          <x-icons.drone class="h-60 w-auto text-sky-900" />
        </div>
      </div>

      <div class="relative z-10 w-full h-full p-6 text-white container mx-auto flex flex-col">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 -mt-40">
          <img src="https://gbscooks.com/assets/img/about/1.png" class="w-full h-96 object-cover" alt="About Us">
          <img src="https://gbscooks.com/assets/img/about/2.png" class="w-full h-96 object-cover" alt="About Us">
          <img src="https://gbscooks.com/assets/img/about/3.png" class="w-full h-96 object-cover" alt="About Us">
          <img src="https://gbscooks.com/assets/img/about/1.png" class="w-full h-96 object-cover" alt="About Us">
        </div>

        <div class="flex gap-4 items-start mt-auto">
          <div class="space-y-6 w-1/3">
            <h2 class="text-4xl font-medium font-jakarta">About Us <br />and Our Solutions</h2>
            <a href="#produk"
              class="bg-white px-5 py-2 rounded-full text-gray-800 font-semibold text-base inline-block">
              Selengkapnya
            </a>
          </div>
          <div class="flex-1">
            <p class="text-xl leading-7">SPARK Robotics is a representative technology company founded in Indonesia by
              Chinese entrepreneurs. The company serves as an authorized distributor of advanced Chinese technologies,
              including DJI enterprise drones and Unitree robotics products, in the Indonesian market. With years of
              experience in Indonesia, SPARK Robotics has developed strong localized service and technical support
              capabilities across industries.</p>
          </div>
        </div>

      </div>
    </section>
    {{-- About Company --}}

    {{-- CTA --}}
    <section class="container mx-auto my-24  md:my-48">
      <div
        class="bg-radial-[at_50%_75%] from-sky-400 via-sky-600 to-sky-800 to-90% container mx-auto px-6 py-12 rounded-none md:rounded-3xl text-center py-20">
        <h2 class="text-5xl font-medium font-jakarta text-slate-50 mb-4 max-w-3xl mx-auto">Ready to Elevate Your Robotics
          and Drones
          Experience?</h2>
        <p class="text-xl font-jakarta text-slate-100 mb-6 max-w-3xl mx-auto">Contact us today to discover how our
          cutting-edge products
          can transform your operations and drive innovation.</p>
        <div class="flex justify-center gap-4">
          <a href="#produk" class="bg-black px-5 py-2 rounded-full text-white   font-semibold text-base">
            Contact Us
          </a>
          <a href="#produk" class="bg-white px-5 py-2 rounded-full text-gray-800   font-semibold text-base">
            Explore Our Catalog
          </a>
        </div>
      </div>
    </section>
    {{-- CTA --}}

  </main>
@endsection
