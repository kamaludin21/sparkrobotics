@extends('layout.app')

@section('content')
  <main class="">
    {{-- CTA --}}
    <section class="mx-auto container pt-24 px-2 mx:px-0">
      <div
        class="bg-[url('https://sparkrobotics.id/images/robotic.webp')] bg-cover bg-center h-auto flex items-center rounded-3xl">

        <div class="container max-w-2xl mx-auto px-6 py-12 rounded-lg text-center mb-96">
          <h2 class="text-6xl font-medium font-jakarta text-white mb-4 ">Spark Robotics <br> <span
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
    </section>
    {{-- CTA --}}

    {{-- Category --}}
    <section class="container mx-auto flex flex-col md:flex-row mt-24 md:mt-48 gap-8 px-2 md:px-0">
      <div class="mb-6 w-full md:w-1/3">
        <p class="text-3xl text-slate-700 font-bold">Our Products Segment</p>
      </div>
      <div class="w-full md:w-2/3 space-y-6">
        <div class="max-w-full md:max-w-xl">
          <p class="text-5xl text-slate-600">Our Wide Range of Robotics and Drones Segments.</p>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-gray-100 rounded-lg p-4">
            <h3 class="text-lg font-semibold mb-2 text-slate-700">Industrial Robotics</h3>
            <p class="text-gray-600 ">Robots designed for manufacturing, assembly, and automation processes.</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-14 w-auto text-gray-400 mt-4">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M3 21h18" />
              <path d="M5 21v-12l5 4v-4l5 4h4" />
              <path d="M19 21v-8l-1.436 -9.574a.5 .5 0 0 0 -.495 -.426h-1.145a.5 .5 0 0 0 -.494 .418l-1.43 8.582" />
              <path d="M9 17h1" />
              <path d="M14 17h1" />
            </svg>
          </div>
          <div class="bg-gray-100 rounded-lg p-4">
            <h3 class="text-lg font-semibold mb-2 text-slate-700">Service Robotics</h3>
            <p class="text-gray-600">Robots used in healthcare, hospitality, and customer service applications.</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="h-14 w-auto text-gray-400 mt-4">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M13 20.693c-.905 .628 -2.36 .292 -2.675 -1.01a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.492 .362 1.716 2.219 .674 3.03" />
              <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
              <path d="M17 22l5 -3l-5 -3l0 6" />
            </svg>
          </div>
          <div class="bg-gray-100 rounded-lg p-4">
            <h3 class="text-lg font-semibold mb-2 text-slate-700">Agricultural Robotics</h3>
            <p class="text-gray-600">Robots designed for farming tasks such as planting, harvesting, and monitoring crops.
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="h-14 w-auto text-gray-400 mt-4">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M5 3h4" />
              <path d="M7 3v12" />
              <path d="M4 15h6v3a3 3 0 0 1 -6 0v-3" />
              <path d="M14 21v-3a3 3 0 0 1 6 0v3" />
              <path d="M17 21v-18" />
            </svg>
          </div>
          <div class="bg-gray-100 rounded-lg p-4">
            <h3 class="text-lg font-semibold mb-2 text-slate-700">Drones</h3>
            <p class="text-gray-600">Unmanned aerial vehicles used for surveillance, delivery, and recreational purposes.
            </p>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
              class="h-14 w-auto text-gray-400 mt-4">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path d="M10 10h4v4h-4l0 -4" />
              <path d="M10 10l-3.5 -3.5" />
              <path d="M9.96 6a3.5 3.5 0 1 0 -3.96 3.96" />
              <path d="M14 10l3.5 -3.5" />
              <path d="M18 9.96a3.5 3.5 0 1 0 -3.96 -3.96" />
              <path d="M14 14l3.5 3.5" />
              <path d="M14.04 18a3.5 3.5 0 1 0 3.96 -3.96" />
              <path d="M10 14l-3.5 3.5" />
              <path d="M6 14.04a3.5 3.5 0 1 0 3.96 3.96" />
            </svg>
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
        <p class="text-3xl md:text-5xl max-w-2xl text-slate-600">Explore Our Diverse Range of Robotics and Drones
          Products.</p>
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
            alt="Blog 1" class="w-full object-cover mx-auto h-48 rounded-xl">
          <div class="px-2 py-4">
            <h3 class="text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              The Future of Robotics: Trends and Predictions for the Next Decade</h3>
            <p class="text-slate-600 mt-2">April 21, 2026</p>
          </div>
        </div>
        <div class="bg-white rounded-2xl p-4 shadow-xl ring ring-slate-200">
          <img src="https://cdn.pudutech.com/blog_82cccb7a7e.png" alt="Blog 1"
            class="w-full object-cover mx-auto h-48 rounded-xl">
          <div class="px-2 py-4">
            <h3 class="text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              Smart Factory's Backbone: How PUDU T300 AMR Powers Ennoconn Technologies' End-to-End EMS Logistics</h3>
            <p class="text-slate-600 mt-2">January 30, 2026</p>
          </div>
        </div>
        <div class="bg-white rounded-2xl p-4 shadow-xl ring ring-slate-200">
          <img src="https://www-cdn.djiits.com/cms/uploads/187cd6bd8123342f34a326d78ce3f85f@770*462.png" alt="Blog 1"
            class="w-full object-cover mx-auto h-48 rounded-xl">
          <div class="px-2 py-4">
            <h3 class="text-xl font-semibold text-slate-700 hover:text-sky-600 cursor-pointer hover:underline">
              DJI Releases Findings of the Most Comprehensive Independent Security Assessment of Its Drone Systems to Date
            </h3>
            <p class="text-slate-600 mt-2">Sept 1, 2025</p>
          </div>
        </div>

      </div>
    </section>
    {{-- Latest blog --}}

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
