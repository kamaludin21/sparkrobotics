@extends('layout.app', ['activePage' => 'news'])

@section('content')
  <main class="main-wrapper px-4 py-24 lg:py-32 overflow-x-hidden">

    <x-layout.news-nav title="Blog" />
    <section class="py-10 space-y-6">
      <p class="text-5xl w-full lg:max-w-2/3 font-bold text-slate-700 leading-16">Above the Clouds: How DJI Dock 3 Is
        Helping Safeguard Europe's Highest Ski Resort</p>
      <div
        class="flex flex-col md:flex-row justify-between items-start md:items-center border-b border-slate-200 pb-6 mb-10 gap-6">

        <div class="flex items-center gap-4">
          <span class="text-slate-500 text-sm">April 24, 2026</span>
        </div>

        <div class="flex items-center gap-3">
          <span class="text-sm font-semibold tracking-widest text-slate-600">SHARE:</span>
          <div class="flex gap-2">
            <a href="#"
              class="w-8 h-8 bg-slate-800 text-white flex items-center justify-center rounded-sm hover:bg-slate-800 transition">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z" />
              </svg>
            </a>
            <a href="#"
              class="w-8 h-8 bg-slate-800 text-white flex items-center justify-center rounded-sm hover:bg-slate-800 transition">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
              </svg>
            </a>
            <a href="#"
              class="w-8 h-8 bg-slate-800 text-white flex items-center justify-center rounded-sm hover:bg-slate-800 transition">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z" />
              </svg>
            </a>
            <a href="#"
              class="w-8 h-8 bg-slate-800 text-white flex items-center justify-center rounded-sm hover:bg-slate-800 transition">
              <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                <path
                  d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              </svg>
            </a>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10">

        <div class="lg:col-span-3 order-2 lg:order-1">
          <h3 class="text-sm font-semibold tracking-wide text-slate-800 mb-4">TAGGED:</h3>
          <div class="flex flex-wrap gap-2">
            <span
              class="bg-slate-100 text-slate-800 text-sm font-medium px-3 py-1.5 rounded-sm hover:bg-slate-200 cursor-pointer transition">Announcement</span>
            <span
              class="bg-slate-100 text-slate-800 text-sm font-medium px-3 py-1.5 rounded-sm hover:bg-slate-200 cursor-pointer transition">Product</span>
          </div>
        </div>

        <div class="lg:col-span-9 order-1 lg:order-2 ">
          {{-- Image --}}
          <div class="mb-6">
            <img class="w-full h-auto" src="https://dorangadget.com/wp-content/uploads/2023/05/merk-drone-terbaik-FI.jpeg"
              alt="">
          </div>
          {{-- Image --}}

          <p class="text-lg leading-relaxed text-black mb-6">
            Skydio, the largest U.S.-based drone manufacturer and the world leader in flying robots, today announced plans
            to invest $3.5 billion in the United States over the next five years to expand its domestic manufacturing,
            accelerate R&D, and strengthen American supply chains. The investment is expected to create over 2,000 new
            Skydio jobs, support the creation of more than 3,000 additional roles within the U.S. supply chain, and direct
            more than $1 billion to domestic suppliers.
          </p>
          <p class="text-lg leading-relaxed text-black mb-6">
            A key component of the investment is SkyForge, a new company program designed to ensure the future of flight
            is built in America. In addition to the billion-dollar investment in U.S. suppliers, Skydio plans to open a
            new U.S. manufacturing facility five times larger than its current space. The company has outgrown four
            American manufacturing facilities in eight years; this will be its fifth expansion to meet extraordinary
            demand. Skydio’s investment in world-class suppliers will help expand - and in some cases initiate - domestic
            manufacturing of crucial parts and components. The company will invite select suppliers to co-locate
            production capacity with Skydio, giving suppliers access to production space and Skydio’s engineering talent
            to help incubate a growing industry.
          </p>
        </div>

      </div>
    </section>
  </main>
@endsection
