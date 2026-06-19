@extends('layout.app', ['activePage' => 'case-studies'])

@section('content')
  <section class="main-wrapper px-4 py-24 md:py-32 space-y-12">
    <!-- Section Title -->
    <div class="">
      <a href="/about-us/case-study"
        class="inline-flex items-center text-sm font-semibold text-blue-600 transition-colors hover:text-blue-800">
        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to Case Studies
      </a>
    </div>
    <div class="">
      <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
        <div>
          <h1 class="mb-6 text-3xl leading-tight font-bold text-slate-700 ">TSINGSHAN GROUP: Smart Park Drone
            Solution</h1>
          <p class="mb-8 text-lg leading-relaxed text-gray-600">SPARK Robotics provides smart park drone solutions for the
            Tsingshan Weda Bay and Morowali Industrial Parks. The parks have specifically established an Aerial Survey
            Department, utilizing drones for unified intelligent management of the entire park.</p>

        </div>
        <div class="relative h-[400px] w-full overflow-hidden rounded-2xl shadow-xl">
          <!-- Menggunakan placeholder drone yang sesuai tema -->
          <img src="https://images.unsplash.com/photo-1508614589041-895b88991e3e?q=80&w=1000&auto=format&fit=crop"
            alt="Drone in flight" class="absolute inset-0 h-full w-full object-cover" />
        </div>
      </div>
    </div>
    <div class="mb-16 grid grid-cols-1 gap-16 md:grid-cols-2">
      <!-- Text Content -->
      <div class="space-y-10">
        <section>
          <h2 class="mb-6 text-3xl font-bold text-slate-800">Our Solution</h2>
          <p class="leading-relaxed text-gray-600">By establishing a dedicated Aerial Survey Department, SPARK Robotics
            deployed a fleet of advanced enterprise drones equipped with high-resolution RGB cameras and LiDAR sensors. We
            implemented an automated flight planning system to ensure consistent data capture across the entire facility.
          </p>
        </section>

        <section>
          <h2 class="mb-6 text-3xl font-bold text-slate-800">The Impact</h2>
          <ul class="space-y-4 text-gray-600">
            <li class="flex items-start">
              <svg class="mr-3 h-6 w-6 shrink-0 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span>Reduced mapping time from weeks to just a few days.</span>
            </li>
            <li class="flex items-start">
              <svg class="mr-3 h-6 w-6 shrink-0 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span>Improved safety by eliminating the need for surveyors to enter hazardous active mining zones.</span>
            </li>
            <li class="flex items-start">
              <svg class="mr-3 h-6 w-6 shrink-0 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
              </svg>
              <span>Provided high-precision 3D models for unified intelligent management.</span>
            </li>
          </ul>
        </section>
      </div>

      <!-- Secondary Image -->
      <div class="relative h-full min-h-[300px] overflow-hidden rounded-2xl">
        <img src="https://images.unsplash.com/photo-1579820010410-c10411aaaa88?q=80&w=1000&auto=format&fit=crop"
          alt="Drone mapping interface" class="absolute inset-0 h-full w-full object-cover" />
      </div>
    </div>

    <!-- CTA Section -->
    <div class="flex items-center justify-between border-t border-gray-200 pt-12">
      <h3 class="text-2xl font-bold text-slate-800">Ready to transform your operations?</h3>
      <!-- Button styled to match the image -->
      <a href="/about-us/contact"
        class="group relative inline-flex h-[calc(48px+8px)] items-center justify-center rounded-full bg-sky-600 py-1 pl-6 pr-14 font-medium text-neutral-50"><span
          class="z-10 pr-2">Contact Us</span>
        <div
          class="absolute right-1 inline-flex h-12 w-12 items-center justify-end rounded-full bg-sky-700 transition-[width] group-hover:w-[calc(100%-8px)]">
          <div class="mr-3.5 flex items-center justify-center"><svg width="15" height="15" viewBox="0 0 15 15"
              fill="none" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-neutral-50">
              <path
                d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg></div>
        </div>
      </a>
    </div>
  </section>
@endsection
