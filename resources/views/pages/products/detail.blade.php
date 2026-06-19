@php
  $bgImage = [
      'type' => 'video',
      'src' => '6zPvT0ig1VM',
      'alt' => 'The New Generation Unitree Go2',
  ];
@endphp
@extends('layout.app', ['activePage' => 'products'])
@section('content')
  <main>
    <x-sections.hero title="The New Generation Unitree Go2" subtitle="A smart and improved partner"
      inquiryText="Place an Inquiry" :background="$bgImage" />

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
          <div
            class="h-72 w-[85%] shrink-0 overflow-hidden rounded-3xl bg-slate-200/30 select-none md:h-72 md:w-auto md:min-w-[calc(32%-1rem)]">
            <img
              src="https://shop.unitree.com/cdn/shop/files/df9f333424ff6cc6164ce421b019fb94_a6f832b0-479e-4294-ac75-6516208b91f4_900x.png"
              draggable="false" class="pointer-events-none h-full w-full object-cover" />
          </div>
          <div
            class="h-72 w-[85%] shrink-0 overflow-hidden rounded-3xl bg-slate-200/30 select-none md:h-72 md:w-auto md:min-w-[calc(32%-1rem)]">
            <img src="https://shop.unitree.com/cdn/shop/files/24_900x.png" draggable="false"
              class="pointer-events-none h-full w-full object-cover" />
          </div>
          <div
            class="h-72 w-[85%] shrink-0 overflow-hidden rounded-3xl bg-slate-200/30 select-none md:h-72 md:w-auto md:min-w-[calc(32%-1rem)]">
            <img src="https://www.unitree.com/images/ea2d2b637df84e3bacd508cd1f2711e5_2744x1596.jpg" draggable="false"
              class="pointer-events-none h-full w-full object-cover" />
          </div>
          <div
            class="h-72 w-[85%] shrink-0 overflow-hidden rounded-3xl bg-slate-200/30 select-none md:h-72 md:w-auto md:min-w-[calc(32%-1rem)]">
            <img src="https://shop.unitree.com/cdn/shop/files/23_900x.png" draggable="false"
              class="pointer-events-none h-full w-full object-cover" />
          </div>
          <div
            class="h-72 w-[85%] shrink-0 overflow-hidden rounded-3xl bg-slate-200/30 select-none md:h-72 md:w-auto md:min-w-[calc(32%-1rem)]">
            <img src="https://shop.unitree.com/cdn/shop/files/21_900x.png" draggable="false"
              class="pointer-events-none h-full w-full object-cover" />
          </div>
        </div>

        <div class="flex-justify-between order-2 flex w-full items-end gap-2 lg:order-1 lg:w-1/4">
          <button @click="slidePrev()"
            class="rounded-full bg-white p-2 ring-1 ring-slate-700 transition-colors hover:bg-slate-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="h-8 w-auto rotate-180 text-slate-700">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
            </svg>
          </button>

          <button @click="slideNext()"
            class="rounded-full bg-white p-2 ring-1 ring-slate-700 transition-colors hover:bg-slate-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
              class="h-8 w-auto text-slate-700">
              <path stroke="none" d="M0 0h24v24H0z" fill="none" />
              <path
                d="M9.707 5.293l6 6a1 1 0 0 1 0 1.414l-6 6a1 1 0 1 1 -1.414 -1.414l5.293 -5.293l-5.293 -5.293a1 1 0 0 1 1.414 -1.414" />
            </svg>
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
      <div class="bg-slate-200 p-6 rounded-4xl">
        <div class="columns-1 gap-4 sm:columns-2">
          <div class="mb-4 break-inside-avoid">
            <img src="https://www.unitree.com/images/b5fffd3e4fc04e6f9fcafedb9516b341_3840x2146.jpg" alt="Gallery 1"
              class="h-auto w-full rounded-xl shadow-md transition-shadow duration-300 hover:shadow-xl" />
          </div>

          <div class="mb-4 break-inside-avoid">
            <img src="https://www.unitree.com/images/c2555e3813074ba6a1f2e124ee7e90cf_3840x2160.jpg" alt="Gallery 2"
              class="h-auto w-full rounded-xl shadow-md transition-shadow duration-300 hover:shadow-xl" />
          </div>

          <div class="mb-4 break-inside-avoid">
            <img src="https://oss-global-cdn.unitree.com/static/ce0f65bf7c214e40922591ff7ef16f2f_2944x1540.jpg"
              alt="Gallery 3" class="h-auto w-full rounded-xl shadow-md transition-shadow duration-300 hover:shadow-xl" />
          </div>

          <div class="mb-4 break-inside-avoid">
            <img src="https://www.unitree.com/images/e41651fe455e463bb25f1ef33ece3809_1920x1370.jpg" alt="Gallery 4"
              class="h-auto w-full rounded-xl shadow-md transition-shadow duration-300 hover:shadow-xl" />
          </div>
        </div>
      </div>

    </section>

    {{-- Product Spec: ref -> https://emlid.com/reachrs4pro/ --}}
    <section class="main-wrapper mt-24 md:mt-32 flex flex-col md:flex-row gap-6 px-4">
      <div class="w-full mb-0 md:mb-6 space-y-4 md:w-1/2 ">
        <p class="text-5xl md:text-6xl text-slate-700 font-semibold">Specification</p>
        <div class="text-base text-slate-600 font-medium">
          <div
            class="border-b hover:bg-slate-300 cursor-pointer border-slate-400 border-dashed w-fit flex items-center gap-1">
            Reach <span class="italic">Unitree Go2</span> Datasheet <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"
                class="h-5 w-auto">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" />
                <path d="M7 11l5 5l5 -5" />
                <path d="M12 4l0 12" />
              </svg>
            </span>
          </div>
          <div class="">
            2.4 MB
          </div>
        </div>
      </div>
      <div x-data="{ activeTab: 'mechanical' }" class="w-full md:w-2/3 overflow-hidden">

        <div class="flex flex-nowrap overflow-x-auto no-scrollbar border-b border-slate-800">
          <button @click="activeTab = 'mechanical'"
            :class="activeTab === 'mechanical' ? 'border-slate-900' :
                'text-slate-600 border-transparent hover:text-slate-500 hover:bg-slate-800/30'"
            class="flex-1 text-left px-6 py-4 text-sm font-medium border transition-all whitespace-nowrap">
            Mechanical & Physical
          </button>
          <button @click="activeTab = 'electrical'"
            :class="activeTab === 'electrical' ? 'border-slate-900' :
                'text-slate-600 border-transparent hover:text-slate-500 hover:bg-slate-800/30'"
            class="flex-1 text-left px-6 py-4 text-sm font-medium border transition-all whitespace-nowrap">
            Electrical & Power
          </button>
          <button @click="activeTab = 'sensors'"
            :class="activeTab === 'sensors' ? 'border-slate-900' :
                'text-slate-600 border-transparent hover:text-slate-500 hover:bg-slate-800/30'"
            class="flex-1 text-left px-6 py-4 text-sm font-medium border transition-all whitespace-nowrap">
            Sensors & Compute
          </button>
        </div>

        <div class="relative min-h-[300px]">

          <div x-show="activeTab === 'mechanical'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute inset-0 py-6 md:py-8" style="display: none;">
            <div class="grid grid-cols-1 gap-x-12 gap-y-2 text-slate-800">
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Dimensions (H x W x D)</span>
                <span class="text-right font-medium">1750 x 550 x 300 mm</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Total Weight</span>
                <span class="text-right font-medium">45 kg</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Degrees of Freedom (DoF)</span>
                <span class="text-right font-medium">32 DoF Total</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Actuator Type</span>
                <span class="text-right font-medium">Quasi-Direct Drive (QDD)</span>
              </div>
            </div>
          </div>

          <div x-show="activeTab === 'electrical'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute inset-0 py-6 md:py-8" style="display: none;">
            <div class="grid grid-cols-1 gap-x-12 gap-y-2 text-slate-800">
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Operating Voltage</span>
                <span class="text-right font-medium">48V DC Nominal</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Battery Type</span>
                <span class="text-right font-medium">Li-ion 12S 20Ah Swappable</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Continuous Running Time</span>
                <span class="text-right font-medium">~4.5 Hours</span>
              </div>
            </div>
          </div>

          <div x-show="activeTab === 'sensors'" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            class="absolute inset-0 py-6 md:py-8" style="display: none;">
            <div class="grid grid-cols-1 gap-x-12 gap-y-2 text-slate-800">
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Vision System</span>
                <span class="text-right font-medium">2x RGB-D Intel RealSense</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Lidar</span>
                <span class="text-right font-medium">360° 3D Lidar (100m Range)</span>
              </div>
              <div class="flex justify-between py-3 border-b border-slate-800/50">
                <span class="text-slate-600">Main Processor</span>
                <span class="text-right font-medium">NVIDIA Jetson Orin AGX</span>
              </div>
            </div>
          </div>

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
            <p class="text-5xl md:text-6xl text-slate-700 font-semibold">Featured Models</p>
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
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-slate-700" fill="none"
                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>

        <div x-ref="slider" @mousedown="startDragging" @mouseleave="stopDragging" @mouseup="stopDragging"
          @mousemove="drag" @touchstart="startDragging" @touchend="stopDragging" @touchmove="drag"
          class="flex lg:grid lg:grid-cols-4 gap-4 overflow-x-auto lg:overflow-visible no-scrollbar cursor-grab active:cursor-grabbing lg:cursor-auto pb-4">

          <div
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
          </div>

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
          <a href="/about-us/contact" class="bg-black px-5 py-2 rounded-full text-white font-semibold text-base">
            Place an Inquiry
          </a>
        </div>
      </div>
    </section>
  </main>
@endsection
