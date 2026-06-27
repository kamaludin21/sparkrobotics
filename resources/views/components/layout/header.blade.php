@php
  $locale = app()->getLocale();
  $prefix = $locale === 'en' ? '' : 'id';
  $isId = $locale === 'id';

  $menus = [
      // Beranda
      [
          'title' => $isId ? 'Beranda' : 'Home',
          'url' => $locale === 'en' ? route('en.home') : route('id.home', ['locale' => $locale]),
          'active_key' => 'home',
          'children' => [],
      ],
      // Produk
      [
          'title' => $isId ? 'Produk' : 'Products',
          'url' => $locale === 'en' ? route('en.products.index') : route('id.products.index', ['locale' => $locale]),
          'active_key' => 'products',
          'children' => [],
      ],
      // Solusi routes.solutions
      [
          'title' => $isId ? 'Solusi' : 'Solutions',
          'url' => $locale === 'en' ? route('en.solutions.index') : route('id.solutions.index', ['locale' => $locale]),
          'active_key' => 'solutions',
          'children' => [],
      ],
      // Berita
      [
          'title' => $isId ? 'Berita' : 'News',
          'url' => $locale === 'en' ? route('en.news.index') : route('id.news.index', ['locale' => $locale]),
          'active_key' => 'news',
          'children' => [],
      ],
      // Tentang Kami / About Us
      [
          'title' => $isId ? 'Tentang Kami' : 'About Us',
          'url' => '#', // Induk tidak dapat di-klik langsung jika berupa dropdown
          'active_key' => ['about', 'case-studies', 'contact'],
          'children' => [
              // Profil Perusahaan
              [
                  'title' => $isId ? 'Profil Perusahaan' : 'Company Profile',
                  'url' => $locale === 'en' ? route('en.about.index') : route('id.about.index', ['locale' => $locale]),
                  'active_key' => 'about',
              ],
              // Studi Kasus
              [
                  'title' => $isId ? 'Studi Kasus' : 'Case Studies',
                  'url' =>
                      $locale === 'en'
                          ? route('en.about.case_study')
                          : route('id.about.case_study', ['locale' => $locale]),
                  'active_key' => 'case-studies',
              ],
              // Kontak
              [
                  'title' => $isId ? 'Kontak' : 'Contact',
                  'url' =>
                      $locale === 'en' ? route('en.about.contact') : route('id.about.contact', ['locale' => $locale]),
                  'active_key' => 'contact',
              ],
          ],
      ],
  ];
@endphp

<header class="fixed top-0 left-0 w-full z-50">
  <nav x-data="{ mobileMenuOpen: false, openMenu: null }" class="bg-white border-b border-gray-200 py-3 relative z-50">

    <div class="main-wrapper mx-auto px-4 flex items-center justify-between relative z-50">
      <div class="flex items-center gap-8 text-slate-700 ">
        <a href="/" class="font-light grid -space-y-2 relative z-50">
          <img src="{{ asset('images/spark.png') }}" class="h-10 w-auto" alt="">
        </a>

        <div class="hidden lg:flex items-center gap-2 text-base font-semibold tracking-normal leading-[24px]">
          @foreach ($menus as $menu)
            @php
              $isParentActive = is_array($menu['active_key'])
                  ? in_array($activePage, $menu['active_key'])
                  : $activePage === $menu['active_key'];
            @endphp

            <div class="relative flex justify-center">
              @if (empty($menu['children']))
                <a href="{{ $menu['url'] }}"
                  class="hover:bg-slate-200/50 rounded-lg px-2 py-1 {{ $isParentActive ? 'text-sky-600 font-semibold relative' : 'hover:text-sky-600 transition-colors' }}">
                  <span class="relative z-10 text-lg">{{ $menu['title'] }}</span>
                  @if ($isParentActive)
                    <div class="absolute top-0 left-0 w-4 h-4 rounded-full bg-amber-400 z-0"></div>
                  @endif
                </a>
              @else
                <div @click.outside="openMenu === '{{ $menu['title'] }}' ? openMenu = null : null">
                  <button
                    @click.prevent="openMenu = openMenu === '{{ $menu['title'] }}' ? null : '{{ $menu['title'] }}'"
                    class="hover:bg-slate-200/50 rounded-lg px-2 py-1 flex items-center gap-1 transition-colors focus:outline-none {{ $isParentActive ? 'text-sky-600' : '' }}"
                    :class="openMenu === '{{ $menu['title'] }}' ? 'text-sky-600' : 'hover:text-sky-600'">
                    <span class="relative z-10 text-lg">{{ $menu['title'] }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round" class="w-5 h-5 transition-transform duration-200"
                      :class="openMenu === '{{ $menu['title'] }}' ? 'rotate-180' : ''">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                      <path d="M6 9l6 6l6 -6" />
                    </svg>
                  </button>

                  <div x-show="openMenu === '{{ $menu['title'] }}'"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" style="display: none;"
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-56 bg-white shadow-xl rounded-lg z-50 border border-slate-100">
                    <div class="py-2 px-1">
                      @foreach ($menu['children'] as $child)
                        <a href="{{ $child['url'] }}"
                          class="block px-4 py-2 text-sm rounded-md no-underline transition-all {{ $activePage === $child['active_key'] ? 'text-amber-500 bg-amber-50 font-bold' : 'text-slate-600 hover:bg-slate-100 hover:text-sky-600' }}">
                          {{ $child['title'] }}
                        </a>
                      @endforeach
                    </div>
                  </div>
                </div>
              @endif
            </div>
          @endforeach
        </div>
      </div>

      <div class="hidden lg:flex items-center gap-2">
        <a href="/whatsapp" target="_blank"
          class="group flex items-center gap-2 text-white pl-1 pr-3 py-2 bg-emerald-600 hover:bg-emerald-700 
           rounded-xl transition-all duration-300 [transition-timing-function:cubic-bezier(0.175,0.885,0.32,1.275)] active:-translate-y-1 active:scale-x-90 active:scale-y-110 ease-out hover:pl-4 cursor-pointer">
          <span
            class="max-w-0 overflow-hidden group-hover:max-w-[120px] transition-all duration-300 ease-out whitespace-nowrap">
            Contact Us
          </span>
          <x-icons.whatsapp class="h-6 w-auto transition-transform duration-300" />
        </a>

        <div class="flex items-center font-normal gap-1 text-base text-slate-600">
          <a href="{{ switch_language_url('id') }}"
            class="leading-4 flex items-center gap-0.5 px-1 hover:text-sky-600 transition-colors {{ app()->getLocale() === 'id' ? 'text-sky-600 font-medium' : '' }}">
            <span>IDN</span>
            <x-icons.language class="h-5 w-auto {{ app()->getLocale() === 'id' ? 'block' : 'hidden' }}" />
          </a>
          <div class="h-4 w-[1.5px] bg-slate-600"></div>
          <a href="{{ switch_language_url('en') }}"
            class="px-1 flex items-center gap-0.5 transition-colors hover:text-sky-600 {{ app()->getLocale() === 'en' ? 'text-sky-600 font-medium' : '' }}">
            <x-icons.language class="h-5 w-auto {{ app()->getLocale() !== 'id' ? 'block' : 'hidden' }}" />
            <span class="leading-4">ENG</span>
          </a>
        </div>
      </div>

      <div class="flex items-center lg:hidden z-50 relative">
        <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-slate-600 hover:text-sky-600 focus:outline-none">
          <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
          <svg x-show="mobileMenuOpen" style="display: none;" class="w-6 h-6" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

    </div>

    <div x-show="mobileMenuOpen" x-transition:enter="transition-opacity ease-linear duration-300"
      x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
      x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100"
      x-transition:leave-end="opacity-0" @click="mobileMenuOpen = false" style="display: none;"
      class="lg:hidden absolute top-full left-0 w-full h-screen bg-slate-900/40 backdrop-blur-sm z-40 cursor-pointer">
    </div>

    <div x-show="mobileMenuOpen" x-cloak
      class="lg:hidden absolute top-full left-0 w-full bg-white border-b border-gray-200 shadow-xl z-50 max-h-[calc(100vh-80px)] overflow-y-auto">
      <div class="flex flex-col px-4 py-6 gap-6">
        <div class="flex flex-col gap-4 text-base font-normal">
          @foreach ($menus as $menu)
            @php
              $isParentActive = is_array($menu['active_key'])
                  ? in_array($activePage, $menu['active_key'])
                  : $activePage === $menu['active_key'];
            @endphp

            <div class="flex flex-col">
              @if (empty($menu['children']))
                <a href="{{ $menu['url'] }}"
                  class="{{ $isParentActive ? 'text-sky-600 font-semibold' : 'text-slate-700' }}">
                  {{ $menu['title'] }}
                </a>
              @else
                <button @click="openMenu = (openMenu === 'm-{{ $loop->index }}' ? null : 'm-{{ $loop->index }}')"
                  class="flex items-center justify-between w-full text-left {{ $isParentActive ? 'text-sky-600 font-semibold' : 'text-slate-700' }}">
                  <span>{{ $menu['title'] }}</span>
                  <svg class="w-4 h-4 transition-transform"
                    :class="openMenu === 'm-{{ $loop->index }}' ? 'rotate-180' : ''" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                  </svg>
                </button>

                <div x-show="openMenu === 'm-{{ $loop->index }}'" x-collapse
                  class="flex flex-col gap-2 pl-4 mt-2 border-l-2 border-gray-100">
                  @foreach ($menu['children'] as $child)
                    <a href="{{ $child['url'] }}"
                      class="text-sm py-1 {{ $activePage === $child['active_key'] ? 'text-orange-500' : 'text-slate-600' }}">
                      {{ $child['title'] }}
                    </a>
                  @endforeach
                </div>
              @endif
            </div>
          @endforeach
        </div>
        <hr class="border-gray-100">
        <div class="flex lg:hidden items-center gap-4 justify-between">
          <div class="flex items-center font-normal gap-1 text-base text-slate-600">
            <a href="#" class="leading-4 px-1 hover:text-sky-600 transition-colors"><span>IDN</span></a>
            <div class="h-4 w-[1.5px] bg-slate-600"></div>
            <a href="#" class="text-sky-600 px-1 flex items-center gap-0.5 font-medium">
              <x-icons.language class="h-4 w-auto" />
              <span class="leading-4">ENG</span>
            </a>
          </div>
          <a href="/whatsapp" target="_blank"
            class="group flex items-center gap-2 text-white pl-1 pr-3 py-2 bg-emerald-600 hover:bg-emerald-700 
             rounded-xl click-animate hover:pl-4 cursor-pointer">
            <span
              class="max-w-0 overflow-hidden group-hover:max-w-[120px] transition-all duration-300 ease-out whitespace-nowrap">
              Contact Us
            </span>
            <x-icons.whatsapp class="h-6 w-auto transition-transform duration-300" />
          </a>
        </div>
      </div>

    </div>

  </nav>
</header>
{{-- <hr class="border-gray-100">
        <div class="flex lg:hidden items-center gap-4 justify-between">
          <div class="flex items-center font-normal gap-1 text-base text-slate-600">
            <a href="#" class="leading-4 px-1 hover:text-sky-600 transition-colors"><span>IDN</span></a>
            <div class="h-4 w-[1.5px] bg-slate-600"></div>
            <a href="#" class="text-sky-600 px-1 flex items-center gap-0.5 font-medium">
              <x-icons.language class="h-4 w-auto" />
              <span class="leading-4">ENG</span>
            </a>
          </div>
          <a href="/whatsapp" target="_blank"
            class="group flex items-center gap-2 text-white pl-1 pr-3 py-2 bg-emerald-600 hover:bg-emerald-700 
             rounded-xl click-animate hover:pl-4 cursor-pointer">
            <span
              class="max-w-0 overflow-hidden group-hover:max-w-[120px] transition-all duration-300 ease-out whitespace-nowrap">
              Contact Us
            </span>
            <x-icons.whatsapp class="h-6 w-auto transition-transform duration-300" />
          </a>
        </div> --}}
