@extends('layout.app')

@section('content')
  <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24 lg:py-32 overflow-x-hidden">
    <x-layout.news-nav title="Download Center" />
    <section class="my-12">
      <h2 class="text-2xl font-semibold mb-6 text-gray-800 border-b border-gray-300 pb-2">Robotics Software</h2>
      <div
        class="hidden md:grid md:grid-cols-[2fr_1fr_1fr_150px] gap-6 border-b border-gray-200 pb-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
        <div>Software & Description</div>
        <div>Version & Date</div>
        <div>Platform & Size</div>
        <div class="text-right"></div>
      </div>

      <div
        class="flex flex-col md:grid md:grid-cols-[2fr_1fr_1fr_150px] gap-4 md:gap-6 border-b border-gray-200 py-6 items-start md:items-center">
        <div>
          <h3 class="text-base font-semibold text-gray-900">RoboCore OS Base</h3>
          <p class="text-sm text-gray-500 mt-1 leading-relaxed">Sistem operasi dasar untuk kontrol pergerakan robot
            bipedal dengan latensi rendah.</p>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Version:</span>
          v4.2.0<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">Jun 10, 2026</span>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Platform:</span>
          Linux / ROS2<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">1.2 GB</span>
        </div>
        <div class="w-full md:w-auto md:text-right mt-2 md:mt-0">
          <button
            class="w-full md:w-auto bg-gray-900 hover:bg-gray-800 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors">
            Download
          </button>
        </div>
      </div>

      <div
        class="flex flex-col md:grid md:grid-cols-[2fr_1fr_1fr_150px] gap-4 md:gap-6 border-b border-gray-200 py-6 items-start md:items-center">
        <div>
          <h3 class="text-base font-semibold text-gray-900">Kinematics Studio</h3>
          <p class="text-sm text-gray-500 mt-1 leading-relaxed">Perangkat lunak simulasi 3D untuk memodelkan sendi dan
            aktuator manipulator.</p>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Version:</span>
          v2.1.5<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">May 28, 2026</span>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Platform:</span>
          Windows / macOS<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">850 MB</span>
        </div>
        <div class="w-full md:w-auto md:text-right mt-2 md:mt-0">
          <button
            class="w-full md:w-auto bg-gray-900 hover:bg-gray-800 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors">
            Download
          </button>
        </div>
      </div>
    </section>

    <section>
      <h2 class="text-2xl font-semibold mb-6 text-gray-800 border-b border-gray-300 pb-2">Drone & UAV Firmware</h2>

      <div
        class="hidden md:grid md:grid-cols-[2fr_1fr_1fr_150px] gap-6 border-b border-gray-200 pb-4 text-xs font-semibold text-gray-500 uppercase tracking-wider">
        <div>Software & Description</div>
        <div>Version & Date</div>
        <div>Platform & Size</div>
        <div class="text-right"></div>
      </div>

      <div
        class="flex flex-col md:grid md:grid-cols-[2fr_1fr_1fr_150px] gap-4 md:gap-6 border-b border-gray-200 py-6 items-start md:items-center">
        <div>
          <h3 class="text-base font-semibold text-gray-900">AeroNav Flight Controller</h3>
          <p class="text-sm text-gray-500 mt-1 leading-relaxed">Pembaruan firmware untuk modul navigasi otonom dan
            penghindaran rintangan.</p>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Version:</span>
          v5.0.1<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">Jun 14, 2026</span>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Platform:</span>
          Firmware (.bin)<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">45 MB</span>
        </div>
        <div class="w-full md:w-auto md:text-right mt-2 md:mt-0">
          <button
            class="w-full md:w-auto bg-gray-900 hover:bg-gray-800 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors">
            Download
          </button>
        </div>
      </div>

      <div
        class="flex flex-col md:grid md:grid-cols-[2fr_1fr_1fr_150px] gap-4 md:gap-6 border-b border-gray-200 py-6 items-start md:items-center">
        <div>
          <h3 class="text-base font-semibold text-gray-900">VisionAI Toolkit</h3>
          <p class="text-sm text-gray-500 mt-1 leading-relaxed">Library pengenalan gambar (Computer Vision) untuk kamera
            payload drone.</p>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Version:</span>
          v1.8.0<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">May 10, 2026</span>
        </div>
        <div class="text-sm text-gray-700">
          <span class="inline-block md:hidden text-xs font-semibold text-gray-500 uppercase mr-2">Platform:</span>
          Ubuntu / Python<br class="hidden md:block">
          <span class="text-gray-500 text-xs mt-1 block">210 MB</span>
        </div>
        <div class="w-full md:w-auto md:text-right mt-2 md:mt-0">
          <button
            class="w-full md:w-auto bg-gray-900 hover:bg-gray-800 text-white text-sm font-medium py-2 px-4 rounded-md transition-colors">
            Download
          </button>
        </div>
      </div>
    </section>
  </main>
@endsection
