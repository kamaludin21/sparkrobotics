@extends('layout.app', ['activePage' => 'news'])

@section('content')
  <main class="main-wrapper px-4 py-24 lg:py-32 overflow-x-hidden">
    <x-layout.news-nav title="Newsroom" />
    <section class="py-10 w-full mx-auto">
      <form class="w-full max-w-lg mx-auto">
        <label for="default-search" class="sr-only">Search</label>
        <div class="relative">
          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-slate-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 20 20">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
            </svg>
          </div>

          <input type="search" id="default-search"
            class="block w-full p-4 pl-10 text-sm text-slate-700 border-1 border-slate-200 rounded-lg bg-slate-100 focus:ring-sky-500 focus:border-sky-500 outline-none transition-all"
            placeholder="Find something..." required />

          <button type="submit"
            class="text-white absolute right-2.5 bottom-2.5 bg-sky-600 hover:bg-sky-700 focus:ring-4 focus:outline-none focus:ring-sky-200 font-medium rounded-md text-sm px-4 py-2 transition-colors">
            Search
          </button>
        </div>
      </form>
    </section>
    <section class="flex flex-col lg:flex-row gap-10 w-full">
      <div class="w-full lg:w-2/3 flex flex-col">
        <img class="w-full h-auto object-cover rounded-xl"
          src="https://blog.emlid.com/wp-content/uploads/2025/12/Reach-RX2-for-gis-and-construction-teams-700x400.webp"
          alt="Reach RX2">

        <div class="flex flex-col sm:flex-row mt-4 items-start gap-4 sm:gap-6 w-full">
          <a href="/news/detail"
            class="hover:underline font-jakarta text-2xl sm:text-3xl md:text-4xl font-medium text-slate-700 text-slate-700 hover:text-sky-600 w-full sm:w-3/4">
            Manage teamwork surveys with collaboration tools in Emlid Flow
          </a>
          <div class="text-base sm:text-lg text-slate-600 w-full sm:w-1/4 sm:text-right shrink-0">
            <p class="font-medium text-sky-600 sm:text-slate-600">Announcement</p>
            <p>June 2, 2026</p>
          </div>
        </div>
      </div>
      <div class="w-full lg:w-1/3 grid content-start divide-y divide-dashed divide-slate-500">
        <div class="grid py-4">
          <div class="inline-flex items-center gap-2 text-sm sm:text-base text-slate-600 mb-1">
            <p class="font-medium">News</p>
            <span>&#8226;</span>
            <p>March 29, 2026</p>
          </div>
          <a href="/news/detail"
            class="text-slate-700 hover:text-sky-600 hover:underline text-lg sm:text-xl font-semibold font-jakarta leading-snug">
            Above the Clouds: How DJI Dock 3 Is Helping Safeguard Europe's Highest Ski Resort
          </a>
        </div>

        <div class="grid py-4">
          <div class="inline-flex items-center gap-2 text-sm sm:text-base text-slate-600 mb-1">
            <p class="font-medium">Announcement</p>
            <span>&#8226;</span>
            <p>March 29, 2026</p>
          </div>
          <a href="/news/detail"
            class="text-slate-700 hover:text-sky-600 hover:underline text-lg sm:text-xl font-semibold font-jakarta leading-snug">
            Unitree Announces H2 Plus, an NVIDIA Isaac GR00T Reference Humanoid Robot for Academic Research
          </a>
        </div>

        <div class="grid py-4">
          <div class="inline-flex items-center gap-2 text-sm sm:text-base text-slate-600 mb-1">
            <p class="font-medium">News</p>
            <span>&#8226;</span>
            <p>March 29, 2026</p>
          </div>
          <a href="/news/detail"
            class="text-slate-700 hover:text-sky-600 hover:underline text-lg sm:text-xl font-semibold font-jakarta leading-snug">
            Above the Clouds: How DJI Dock 3 Is Helping Safeguard Europe's Highest Ski Resort
          </a>
        </div>

        <div class="grid py-4">
          <div class="inline-flex items-center gap-2 text-sm sm:text-base text-slate-600 mb-1">
            <p class="font-medium">News</p>
            <span>&#8226;</span>
            <p>March 29, 2026</p>
          </div>
          <a href="/news/detail"
            class="text-slate-700 hover:text-sky-600 hover:underline text-lg sm:text-xl font-semibold font-jakarta leading-snug">
            Above the Clouds: How DJI Dock 3 Is Helping Safeguard Europe's Highest Ski Resort
          </a>
        </div>

      </div>
    </section>

    <section class="py-10 space-y-6">
      <p class="text-3xl font-bold text-slate-700">News</p>

      <div class="w-full">

        <div
          class="hidden md:grid md:grid-cols-[1fr_150px_200px] gap-6 border-b border-slate-200 pb-4 text-xs font-semibold text-slate-500 uppercase tracking-wider">
          <div>Title</div>
          <div>Date</div>
          <div>Category</div>
        </div>

        <div class="flex flex-col md:grid md:grid-cols-[1fr_150px_200px] gap-2 md:gap-6 border-b border-slate-200 py-5">
          <div class="text-base text-slate-800 mt-1 md:mt-0 leading-relaxed">
            <a href="/news/detail">Statement on the US government directive to suspend access to Fable 5 and Mythos 5</a>
          </div>
          <div class="text-sm md:text-base text-slate-600 md:text-slate-800">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Date:</span>
            Jun 12, 2026
          </div>
          <div class="text-sm md:text-base text-slate-500">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Category:</span>
            News
          </div>
        </div>
        <div class="flex flex-col md:grid md:grid-cols-[1fr_150px_200px] gap-2 md:gap-6 border-b border-slate-200 py-5">
          <div class="text-base text-slate-800 mt-1 md:mt-0 leading-relaxed">
            The Future of Robotics: Trends and Predictions for the Next Decade
          </div>
          <div class="text-sm md:text-base text-slate-600 md:text-slate-800">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Date:</span>
            Jun 12, 2026
          </div>
          <div class="text-sm md:text-base text-slate-500">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Category:</span>
            Announcements
          </div>
        </div>
        <div class="flex flex-col md:grid md:grid-cols-[1fr_150px_200px] gap-2 md:gap-6 border-b border-slate-200 py-5">
          <div class="text-base text-slate-800 mt-1 md:mt-0 leading-relaxed">
            Smart Factory's Backbone: How PUDU T300 AMR Powers Ennoconn Technologies' End-to-End EMS Logistics
          </div>
          <div class="text-sm md:text-base text-slate-600 md:text-slate-800">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Date:</span>
            Jun 12, 2026
          </div>
          <div class="text-sm md:text-base text-slate-500">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Category:</span>
            Blog
          </div>
        </div>
        <div class="flex flex-col md:grid md:grid-cols-[1fr_150px_200px] gap-2 md:gap-6 border-b border-slate-200 py-5">
          <div class="text-base text-slate-800 mt-1 md:mt-0 leading-relaxed">
            DJI Releases Findings of the Most Comprehensive Independent Security Assessment of Its Drone Systems to Date
          </div>
          <div class="text-sm md:text-base text-slate-600 md:text-slate-800">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Date:</span>
            Jun 12, 2026
          </div>
          <div class="text-sm md:text-base text-slate-500">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Category:</span>
            Announcements
          </div>
        </div>
        <div class="flex flex-col md:grid md:grid-cols-[1fr_150px_200px] gap-2 md:gap-6 border-b border-slate-200 py-5">
          <div class="text-base text-slate-800 mt-1 md:mt-0 leading-relaxed">
            Important Reminder from Unitree: Avoid Being Deceived
          </div>
          <div class="text-sm md:text-base text-slate-600 md:text-slate-800">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Date:</span>
            Jun 12, 2026
          </div>
          <div class="text-sm md:text-base text-slate-500">
            <span
              class="inline-block md:hidden text-xs font-semibold text-slate-500 uppercase tracking-wider mr-2">Category:</span>
            Announcements
          </div>
        </div>

      </div>
      {{-- Pagination --}}
      {{-- CUSTOM PAGINATION --}}
      <div class="pt-10 border-t border-slate-100 flex flex-col items-center gap-6">
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
    </section>
  </main>
@endsection
