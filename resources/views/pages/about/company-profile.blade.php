@extends('layout.app', ['activePage' => 'about'])

@section('content')
  <main class="w-full bg-white antialiased">
    <section class="relative isolate overflow-hidden bg-white">
      <div class="absolute inset-0 -z-10 h-full w-full overflow-hidden">
        <svg
          class="absolute inset-0 h-full w-full stroke-gray-200 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
          aria-hidden="true">
          <defs>
            <pattern id="tech-grid" width="40" height="40" x="50%" y="-1" patternUnits="userSpaceOnUse">
              <path d="M.5 40V.5H40" fill="none" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#tech-grid)" />
        </svg>

        <div
          class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
          aria-hidden="true">
          <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
            style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
          </div>
        </div>
      </div>

      <div class="mx-auto max-w-4xl py-24 sm:py-32 lg:py-40 text-center px-6">
        <div class="mb-8 flex justify-center">
          <div
            class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20 bg-white/50 backdrop-blur-sm">
            Expertise Meets Excellence
          </div>
        </div>

        <h1 class="text-5xl font-bold tracking-tight text-gray-900 sm:text-7xl">
          SPARK <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">Robotics</span>
        </h1>
        <p class="mt-6 text-xl font-semibold leading-8 text-blue-600 uppercase tracking-[0.3em]">
          Authorized Reseller of DJI Enterprise and Unitree
        </p>
        <p class="mt-4 text-lg leading-8 text-gray-600 max-w-2xl mx-auto">
          Distributor resmi teknologi <strong>DJI Enterprise</strong> dan <strong>Unitree Robotics</strong> di Indonesia.
          Menghadirkan efisiensi melalui automasi udara dan darat.
        </p>
      </div>
    </section>
    <section class="main-wrapper px-4 py-16">
      <div class="grid grid-cols-1 gap-y-16 lg:grid-cols-2 lg:gap-x-16 lg:items-center">
        <div>
          <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Siapa Kami?</h2>
          <p class="mt-6 text-base leading-7 text-gray-600">
            <strong class="font-semibold text-gray-900">SPARK Robotics</strong> adalah perusahaan teknologi terkemuka
            yang
            didirikan di Indonesia oleh pengusaha asal Tiongkok. Kami hadir sebagai distributor resmi untuk teknologi
            canggih Tiongkok di pasar Indonesia, secara khusus berfokus pada penyediaan drone <em>enterprise</em> merek
            <strong>DJI</strong> dan produk robotika dari <strong>Unitree</strong>.
          </p>
          <p class="mt-4 text-base leading-7 text-gray-600">
            Dengan pengalaman bertahun-tahun beroperasi di Indonesia, kami telah membangun kapasitas layanan lokal dan
            dukungan teknis yang sangat kuat. Layanan profesional dan keahlian teknis kami telah mendapatkan pengakuan
            luas serta umpan balik positif dari klien-klien kami.
          </p>
        </div>
        <div
          class="relative w-full h-64 sm:h-80 lg:h-96 rounded-2xl overflow-hidden bg-gray-100 shadow-xl border border-gray-200 flex items-center justify-center group">
          <div class="text-center p-6 transition group-hover:scale-105">
            <svg class="mx-auto h-16 w-16 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
              stroke-width="1.5">
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M6.827 6.175A2.31 2.31 0 015.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 00-1.134-.175 2.31 2.31 0 01-1.64-1.055l-.822-1.316a2.192 2.192 0 00-1.736-1.039 48.774 48.774 0 00-5.232 0 2.192 2.192 0 00-1.736 1.039l-.821 1.316z" />
              <path stroke-linecap="round" stroke-linejoin="round"
                d="M16.5 12.75a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zM18.75 10.5h.008v.008h-.008V10.5z" />
            </svg>
            <span class="mt-3 block text-sm font-medium text-gray-500">[Gambar Perusahaan]</span>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-gray-900 py-16 sm:py-24">
      <div class="main-wrapper px-4">
        <div class="mx-auto max-w-2xl lg:text-center">
          <h2 class="text-base font-semibold leading-7 text-blue-400">Jangkauan Layanan</h2>
          <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Industri yang Kami Dukung</p>
          <p class="mt-6 text-lg leading-8 text-gray-300">
            Kami menyediakan solusi terintegrasi yang disesuaikan untuk memenuhi tantangan dan kebutuhan operasional di
            berbagai sektor industri krusial:
          </p>
        </div>

        <div class="mx-auto mt-16 max-w-2xl sm:mt-20 lg:mt-24 lg:max-w-none">
          <dl class="grid max-w-xl grid-cols-2 gap-x-6 gap-y-6 lg:max-w-none lg:grid-cols-4 sm:grid-cols-3">
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Pertambangan</dt>
            </div>
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Minyak & Gas</dt>
            </div>
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Konstruksi</dt>
            </div>
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Listrik & Utilitas</dt>
            </div>
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Ilmu Lingkungan</dt>
            </div>
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Pemadam Kebakaran</dt>
            </div>
            <div
              class="flex items-center justify-center bg-gray-800 p-6 rounded-xl ring-1 ring-white/10 hover:ring-blue-500 transition-all">
              <dt class="text-base font-semibold leading-7 text-white text-center">Keamanan Publik</dt>
            </div>
          </dl>
        </div>
      </div>
    </section>

    <section class="py-16 sm:py-24 bg-white">
      <div class="main-wrapper px-4">
        <h2 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Dipercaya Oleh</h2>
        <p class="mt-4 text-center text-lg leading-8 text-gray-600 max-w-3xl mx-auto">
          Hingga saat ini, SPARK Robotics telah memberikan layanan dan solusi terbaik kepada berbagai organisasi
          terkemuka yang beroperasi di Indonesia:
        </p>

        <div class="mt-12 flex justify-center gap-6 flex-wrap max-w-5xl mx-auto">
          <img class="w-auto h-14"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGjcgQMHd9CnnvgPR_kgFOFVRzT7Lq_Ij8fA&s"
            alt="IWIP Group">
          <img class="w-auto h-14"
            src="https://imip.co.id/wp-content/uploads/2024/06/Screenshot_2024-06-21_at_9.25.55_PM-removebg-preview.png"
            alt="">
          <img class="w-auto h-14" src="https://trellis.net/wp-content/uploads/2025/12/POWERCHINA-Logo.png"
            alt="">
          <img class="w-auto h-14" src="https://www.ceic.com/gjnyjtwwEn/xhtml/images/jtjs0.png" alt="">
          <img class="w-auto h-14"
            src="https://play-lh.googleusercontent.com/UgxsDpxXcUq3J_f0HZwsLdJAyavuKbH0bYiWsX3zuuCjiLlD_RP6HgCkNpJATFzEJ7uUYF_L-O3yVKmAs9ki=w480-h960-rw"
            alt="">
          <img class="w-auto h-14" src="https://www.sinarmas.com/images/Untitled-2.png" alt="">
          <img class="w-auto h-14" src="https://www.pertamina.com/file/files/2025/02/pertamina-logo.svg"
            alt="">
          <img class="w-auto h-14" src="https://www.baramultigroup.co.id/assets/images/logo.png" alt="">
          <img class="w-auto h-14" src="https://www.aprilasia.com/id/templates/osapril/assets/logo.png" alt="">
          <img class="w-auto h-14" src="https://adaroindonesia.com/theme/images/Logo-Adaro-Andalan-Indonesia-Color.png"
            alt="">
          <img class="w-auto h-14"
            src="https://www.bp.com/apps/settings/wcm/designs/refresh/bp/images/navigation/bp-logo.svg" alt="">
          <img class="w-auto h-14" src="https://asc.co.id/images/2023/11/06/000a---logo-header.png" alt="">
          <img class="w-auto h-14" src="https://www.sucofindo.co.id/wp-content/uploads/2022/08/image-4.webp"
            alt="">
          <img class="w-auto h-14"
            src="https://thermalindo.com/wp-content/uploads/2016/05/PT.-THIESS-CONTRACTORS-INDONESIA.gif"
            alt="">
          <img class="w-auto h-14"
            src="https://www.amman.co.id/assets/logo-amman-1326d9e51ac0ffe53dc6956cc15ff5c877db72a9afa86af0336721b9f08b2046.png"
            alt="">
          <img class="w-auto h-14" src="https://www.conocophillips.com/images/logo-black.svg" alt="">
          <img class="w-auto h-14" src="https://www.ptsi.co.id/images/logo-footer-surveyor.png" alt="">
          <img class="w-auto h-14" src="https://career.inpex.co.id/img/logov2.png" alt="">
          <img class="w-auto h-14"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT8LFzAPCkw_tfzzIMnvr7OWh6_6LUp3L7MmA&s"
            alt="">
          <img class="w-auto h-14" src="https://corporatewatch.org/wp-content/uploads/2017/10/Syngenta_Logo.svg_.png"
            alt="">
          <img class="w-auto h-14"
            src="https://fintech.id/_next/image?url=https%3A%2F%2Ffintechid-bucket.s3.ap-southeast-3.amazonaws.com%2Faftech%2Fassets%2Ffiles%2Fshares%2Flogo%2Flogofi2%2FTELKOMSEL_TELKOM_LOCKUP_RED_CMYK%20-%20Kurniawan%20Cahyo.png&w=3840&q=75"
            alt="">
          <img class="w-auto h-14" src="https://upload.wikimedia.org/wikipedia/id/e/e1/Logo_PT_ANJ.png" alt="">
          <img class="w-auto h-14" src="https://static.diginusantara.com/2024/01/01/99868bc06logo-white.png"
            alt="">
          <img class="w-auto h-14" src="https://bumainternational.com/images/post/wTAGiK0ubYaGkdQek5.jpg"
            alt="">
          <img class="w-auto h-14" src="https://corporatewatch.org/wp-content/uploads/2017/10/1200px-G4S.svg_.png"
            alt="">
          <img class="w-auto h-14"
            src="https://lh5.googleusercontent.com/proxy/x2KkQ5eHTkGUpge5g59yFPszySf-mKAOEMnj9Y0OhHq6GFrXvHHqnCw9dSv2SR7lUObXvKmESSwg8kYN3ZS2ZrlGyqem8-40qj6mF3c7qPpKFrZrMxzLyudRcQ"
            alt="">
          <img class="w-auto h-14" src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Logo_MedcoEnergi.png"
            alt="">
          <img class="w-auto h-14" src="https://upload.wikimedia.org/wikipedia/commons/f/f7/Logo_Bayer.svg"
            alt="">
          <img class="w-auto h-14"
            src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhXLczlo3dV3sgrfT9W516dxIUiOnkWRlZaOrsNyQ5A5bqHEpVLyZYCMZ7b4cy71MSla10cmB1yiTl6QgbCE8U_ZhyphenhyphennNZK9Tytafd6JZ0UWlFfwiLHpOIpjAP7mubxdwbQHcg7t_aQMZz-2/s1600/pineapplelogo.jpg"
            alt="">
          <img class="w-auto h-14"
            src="https://www.starenergy.co.id/content/image/cropped-logo-SE-scaled-1-e1715744452795.jpg" alt="">
          <img class="w-auto h-14" src="https://www.ptpp.co.id/icon.png" alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/id/thumb/7/73/Waskita_Karya.svg/1280px-Waskita_Karya.svg.png"
            alt="">
          <img class="w-auto h-14" src="https://ptpnxiv.com/assets/images/IMG20230809153902.png" alt="">
          <img class="w-auto h-14" src="https://www.comoeng.com.au/wp-content/uploads/2021/12/Archi-Group.jpg"
            alt="">
          <img class="w-auto h-14"
            src="https://cdn.prod.website-files.com/64f3c4268355564bf3736396/64f3c4268355564bf3736481_Gama%20Plantation.png"
            alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5b/Japan_International_Cooperation_Agency_logo.svg/1280px-Japan_International_Cooperation_Agency_logo.svg.png"
            alt="">
          <img class="w-auto h-14" src="https://r2.astra.co.id/business/logos/01JPHP5W8WMQSZDMJ8YNV41WEV.png"
            alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/id/thumb/3/3b/ITM_logo.png/1280px-ITM_logo.png" alt="">
          <img class="w-auto h-14" src="https://www.kpc.co.id/wp-content/uploads/2025/12/Logo_KPC.png" alt="">
          <img class="w-auto h-14" src="https://gpslands.co.id/wp-content/uploads/2026/03/HME-removebg-preview-Copy.png"
            alt="">
          <img class="w-auto h-14"
            src="https://careers.haritanickel.com/public/assets/img/Logo_Harita%20Nickel_Primer.png" alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Logo_of_Biro_Klasifikasi_Indonesia_2021.svg/250px-Logo_of_Biro_Klasifikasi_Indonesia_2021.svg.png"
            alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/commons/8/8a/Logo_Kementerian_Pertanian_Republik_Indonesia.svg"
            alt="">
          <img class="w-auto h-14" src="https://imip.co.id/wp-content/uploads/2024/07/BDM.png" alt="">
          <img class="w-auto h-14" src="https://koni.id/storage/anggota_images/PB-FASI.png" alt="">
          <img class="w-auto h-14" src="https://www.arutmin.com/assets/img/logo.jpg?v=1708507774" alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/id/9/95/Logo_Institut_Teknologi_Bandung.png" alt="">
          <img class="w-auto h-14"
            src="https://upload.wikimedia.org/wikipedia/id/thumb/3/30/Institut_Teknologi_Sepuluh_Nopember_logo.svg/250px-Institut_Teknologi_Sepuluh_Nopember_logo.svg.png"
            alt="">
          <img class="w-auto h-14" src="https://upload.wikimedia.org/wikipedia/id/5/59/Astra-Agro.gif" alt="">
          <img class="w-auto h-14" src="https://www.arsari.co.id/wp-content/uploads/2025/01/arsari-group-logo.png"
            alt="">
        </div>
      </div>
    </section>
  </main>
@endsection
