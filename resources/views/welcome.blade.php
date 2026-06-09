<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page Modern</title>

  <script src="https://cdn.tailwindcss.com"></script>

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-slate-50 flex flex-col min-h-screen font-sans text-slate-800" x-data="landingPageData()">

  <nav class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16 items-center">

        <div class="flex-shrink-0 flex items-center cursor-pointer">
          <span class="text-2xl font-black bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-indigo-600">
            {{ t('home.title') }}
          </span>
        </div>

        <div class="hidden md:flex space-x-8 items-center">
          <template x-for="(item, index) in content[lang].nav" :key="index">
            <a href="#" class="text-slate-600 hover:text-indigo-600 font-medium transition-colors duration-200"
              x-text="item"></a>
          </template>

          <div class="relative" x-data="{ open: false }">
            <button @click="open = !open" @click.outside="open = false"
              class="flex items-center space-x-1 text-slate-600 hover:text-indigo-600 font-medium focus:outline-none">
              <span class="uppercase" x-text="lang"></span>
              <svg class="h-4 w-4 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>

            <div x-show="open" x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 mt-2 w-28 bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
              style="display: none;">
              <div class="py-1">
                <button @click="lang = 'id'; open = false"
                  class="block w-full text-left px-4 py-2 text-sm hover:bg-indigo-50"
                  :class="lang === 'id' ? 'text-indigo-600 font-bold' : 'text-slate-700'">ID - Indo</button>
                <button @click="lang = 'en'; open = false"
                  class="block w-full text-left px-4 py-2 text-sm hover:bg-indigo-50"
                  :class="lang === 'en' ? 'text-indigo-600 font-bold' : 'text-slate-700'">EN - Eng</button>
              </div>
            </div>
          </div>
        </div>

        <div class="flex items-center md:hidden">
          <button @click="mobileMenuOpen = !mobileMenuOpen"
            class="text-slate-500 hover:text-slate-700 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6h16M4 12h16M4 18h16" />
              <path x-show="mobileMenuOpen" style="display: none;" stroke-linecap="round" stroke-linejoin="round"
                stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <div x-show="mobileMenuOpen" class="md:hidden bg-white border-t border-slate-100" style="display: none;"
      x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2"
      x-transition:enter-end="opacity-100 translate-y-0">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <template x-for="(item, index) in content[lang].nav" :key="index">
          <a href="#"
            class="block px-3 py-2 rounded-md text-base font-medium text-slate-700 hover:text-indigo-600 hover:bg-indigo-50"
            x-text="item"></a>
        </template>

        <div class="border-t border-slate-100 mt-2 pt-4 pb-2 flex space-x-4 px-3">
          <span class="text-sm text-slate-400 font-medium uppercase" x-text="content[lang].langLabel"></span>
          <button @click="lang = 'id'; mobileMenuOpen = false"
            :class="lang === 'id' ? 'text-indigo-600 font-bold underline' : 'text-slate-600'"
            class="text-sm">ID</button>
          <button @click="lang = 'en'; mobileMenuOpen = false"
            :class="lang === 'en' ? 'text-indigo-600 font-bold underline' : 'text-slate-600'"
            class="text-sm">EN</button>
        </div>
      </div>
    </div>
  </nav>

  <main class="flex-grow flex items-center justify-center pt-16 pb-20 px-4 sm:px-6 lg:px-8">

    <ul>
      @foreach ($data as $item)
        <li>{{ $item->title }}</li>
      @endforeach
    </ul>
    {{-- <div class="text-center max-w-4xl mx-auto">
      <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl md:text-6xl">
        <span class="block" x-text="content[lang].heroTitle1"></span>
        <span class="block text-indigo-600 mt-2" x-text="content[lang].heroTitle2"></span>
      </h1>
      <p class="mt-4 max-w-2xl mx-auto text-base text-slate-500 sm:text-lg md:text-xl md:mt-6"
        x-text="content[lang].heroSubtitle">
      </p>
      <div class="mt-8 sm:max-w-lg sm:mx-auto sm:text-center sm:flex sm:justify-center gap-4">
        <a href="#"
          class="w-full sm:w-auto flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-indigo-600 hover:bg-indigo-700 shadow-md hover:shadow-lg transition-all duration-200 md:py-4 md:text-lg">
          <span x-text="content[lang].ctaPrimary"></span>
        </a>
        <a href="#"
          class="mt-3 sm:mt-0 w-full sm:w-auto flex items-center justify-center px-8 py-3 border border-slate-300 text-base font-medium rounded-lg text-slate-700 bg-white hover:bg-slate-50 hover:border-slate-400 shadow-sm transition-all duration-200 md:py-4 md:text-lg">
          <span x-text="content[lang].ctaSecondary"></span>
        </a>
      </div>
    </div> --}}
  </main>

  <footer class="bg-white border-t border-slate-200 mt-auto">
    <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center">
      <p class="text-slate-400 text-sm" x-text="content[lang].footerText"></p>
      <div class="flex space-x-6 mt-4 md:mt-0">
        <a href="#" class="text-slate-400 hover:text-slate-500 transition-colors">
          <span class="sr-only">Twitter</span>
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path
              d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
          </svg>
        </a>
        <a href="#" class="text-slate-400 hover:text-slate-500 transition-colors">
          <span class="sr-only">GitHub</span>
          <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path fill-rule="evenodd"
              d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
              clip-rule="evenodd" />
          </svg>
        </a>
      </div>
    </div>
  </footer>

  <script>
    function landingPageData() {
      return {
        lang: 'id',
        mobileMenuOpen: false,
        content: {
          id: {
            nav: ['Fitur', 'Solusi', 'Harga'],
            langLabel: 'Bahasa:',
            heroTitle1: 'Bangun Produk Hebat',
            heroTitle2: 'Dalam Hitungan Hari',
            heroSubtitle: 'Solusi terbaik untuk membuat halaman yang responsif dan modern. Didesain untuk performa maksimal dengan arsitektur terkini.',
            ctaPrimary: 'Mulai Proyek',
            ctaSecondary: 'Lihat Dokumentasi',
            footerText: '© 2026 Hak Cipta Dilindungi.'
          },
          en: {
            nav: ['Features', 'Solutions', 'Pricing'],
            langLabel: 'Language:',
            heroTitle1: 'Build Great Products',
            heroTitle2: 'In a Matter of Days',
            heroSubtitle: 'The best solution for creating responsive and modern pages. Designed for maximum performance with the latest architecture.',
            ctaPrimary: 'Start Project',
            ctaSecondary: 'View Documentation',
            footerText: '© 2026 All Rights Reserved.'
          }
        }
      }
    }
  </script>
</body>

</html>
