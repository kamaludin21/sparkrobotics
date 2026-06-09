<header class="fixed top-0 left-0 w-full z-50">
  <nav x-data="{
      mobileMenuOpen: false,
      openMenu: null,
      menus: [
          { title: 'Beranda', url: '#', is_active: true, children: [] },
          {
              title: 'Produk',
              url: '#',
              is_active: false,
              children: [
                  { title: 'Industrial Arm', url: '#', is_active: false },
                  { title: 'Edu-Kit Pro', url: '#', is_active: false },
                  { title: 'Service Bots', url: '#', is_active: false }
              ]
          },
          {
              title: 'Portofolio',
              url: '#',
              is_active: false,
              children: [
                  { title: 'Arm Automation', url: '#', is_active: false },
                  { title: 'School Projects', url: '#', is_active: true },
                  { title: 'Hospitality Bots', url: '#', is_active: false }
              ]
          },
          { title: 'Tentang Kami', url: '#', is_active: false, children: [] }
      ]
  }" class="bg-white border-b border-gray-200 py-3 relative z-50">

    <div class="container mx-auto px-4 xl:px-0 flex items-center justify-between relative z-50">

      <div class="flex items-center gap-8">
        <a href="#" class="text-slate-800 font-light grid -space-y-2 relative z-50">
          <span class="text-lg font-medium">Spark</span><span class="text-base">Robotics</span>
        </a>

        <div class="hidden md:flex items-center gap-6 text-base font-normal tracking-normal leading-[24px]">
          <template x-for="menu in menus" :key="menu.title">
            <div class="relative flex justify-center">

              <template x-if="menu.children.length === 0">
                <a :href="menu.url"
                  :class="menu.is_active ? 'text-sky-600 font-semibold relative' :
                      'text-slate-700 hover:text-sky-600 transition-colors'">
                  <span class="relative z-10" x-text="menu.title"></span>
                  <template x-if="menu.is_active">
                    <div class="absolute -top-1 -left-1 w-4 h-4 rounded-full bg-amber-400 z-0"></div>
                  </template>
                </a>
              </template>

              <template x-if="menu.children.length > 0">
                <div @click.outside="openMenu === menu.title ? openMenu = null : null">
                  <button @click.prevent="openMenu = openMenu === menu.title ? null : menu.title"
                    class="flex items-center gap-1 transition-colors focus:outline-none"
                    :class="openMenu === menu.title ? 'text-sky-600' : 'text-slate-700 hover:text-sky-600'">
                    <span x-text="menu.title"></span>
                    <svg class="w-4 h-4 transition-transform duration-200"
                      :class="openMenu === menu.title ? 'rotate-180' : ''" fill="none" stroke="currentColor"
                      viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                  </button>

                  <div x-show="openMenu === menu.title" x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 translate-y-1"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-75" x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0" style="display: none;"
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-56 bg-white shadow-xl rounded-lg z-50 border border-slate-100">
                    <div class="py-2 px-1">
                      <template x-for="child in menu.children" :key="child.title">
                        <a :href="child.url"
                          :class="child.is_active ? 'text-orange-500 bg-orange-50 font-bold' :
                              'text-slate-600 hover:bg-slate-100 hover:text-sky-600'"
                          class="block px-4 py-2 text-sm rounded-md no-underline transition-all" x-text="child.title">
                        </a>
                      </template>
                    </div>
                  </div>
                </div>
              </template>

            </div>
          </template>
        </div>
      </div>

      <div class="hidden md:flex items-center gap-4">
        <button
          class="flex items-center gap-2 text-white px-5 py-2 bg-sky-600 hover:bg-sky-700 transition-colors rounded-full">
          <x-icons.whatsapp class="h-6 w-auto" />
          <span>Hubungi Kami</span>
        </button>
        <div class="flex items-center font-normal gap-1 text-base text-slate-600">
          <a href="#" class="leading-4 px-1 hover:text-sky-600 transition-colors"><span>IDN</span></a>
          <div class="h-4 w-[1.5px] bg-slate-600"></div>
          <a href="#" class="text-sky-600 px-1 flex items-center gap-0.5 font-medium">
            <x-icons.language class="h-5 w-auto" />
            <span class="leading-4">ENG</span>
          </a>
        </div>
      </div>

      <div class="flex items-center md:hidden z-50 relative">
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
      class="md:hidden absolute top-full left-0 w-full h-screen bg-slate-900/40 backdrop-blur-sm z-40 cursor-pointer">
    </div>

    <div x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
      x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
      x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
      x-transition:leave-end="opacity-0 -translate-y-2" style="display: none;"
      class="md:hidden absolute top-full left-0 w-full bg-white border-b border-gray-200 shadow-xl z-50 max-h-[calc(100vh-80px)] overflow-y-auto">
      <div class="flex flex-col px-4 py-6 gap-6">
        <div class="flex flex-col gap-4 text-base font-normal tracking-normal">

          <template x-for="menu in menus" :key="menu.title">
            <div class="flex flex-col gap-2">

              <template x-if="menu.children.length === 0">
                <a :href="menu.url"
                  :class="menu.is_active ? 'text-sky-600 font-semibold relative' :
                      'text-slate-700 hover:text-sky-600 transition-colors'"
                  class="inline-block w-max">
                  <span class="relative z-10" x-text="menu.title"></span>
                  <template x-if="menu.is_active">
                    <div class="absolute -top-1 -left-1 w-4 h-4 rounded-full bg-amber-400 z-0"></div>
                  </template>
                </a>
              </template>

              <template x-if="menu.children.length > 0">
                <div class="flex flex-col gap-2">
                  <button
                    @click.prevent="openMenu = openMenu === 'mobile-' + menu.title ? null : 'mobile-' + menu.title"
                    class="flex items-center justify-between transition-colors focus:outline-none w-full text-left"
                    :class="openMenu === 'mobile-' + menu.title ? 'text-sky-600' : 'text-slate-700 hover:text-sky-600'">
                    <span x-text="menu.title"></span>
                    <svg class="w-4 h-4 transition-transform duration-200"
                      :class="openMenu === 'mobile-' + menu.title ? 'rotate-180' : ''" fill="none"
                      stroke="currentColor" viewBox="0 0 24 24">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                      </path>
                    </svg>
                  </button>

                  <div x-show="openMenu === 'mobile-' + menu.title"
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0" style="display: none;"
                    class="flex flex-col gap-2 pl-4 mt-2 border-l-2 border-gray-100">
                    <template x-for="child in menu.children" :key="child.title">
                      <a :href="child.url"
                        :class="child.is_active ? 'text-orange-500 font-semibold' : 'text-slate-600 hover:text-sky-600'"
                        class="text-sm py-1 transition-colors" x-text="child.title">
                      </a>
                    </template>
                  </div>
                </div>
              </template>

            </div>
          </template>

        </div>
        <hr class="border-gray-100">
        <div class="flex md:hidden items-center gap-4 justify-between">

          <div class="flex items-center font-normal gap-1 text-base text-slate-600">
            <a href="#" class="leading-4 px-1 hover:text-sky-600 transition-colors"><span>IDN</span></a>
            <div class="h-4 w-[1.5px] bg-slate-600"></div>
            <a href="#" class="text-sky-600 px-1 flex items-center gap-0.5 font-medium">
              <x-icons.language class="h-4 w-auto" />
              <span class="leading-4">ENG</span>
            </a>
          </div>
          <button
            class="flex items-center gap-2 text-white px-5 py-2 bg-sky-600 hover:bg-sky-700 transition-colors rounded-full">
            <x-icons.whatsapp class="h-5 w-auto" />
            <span>Hubungi Kami</span>
          </button>
        </div>
      </div>
    </div>
  </nav>
</header>
