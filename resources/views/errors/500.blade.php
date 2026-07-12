@extends('layout.app')

@section('content')
  <main
    class="main-wrapper py-16 md:py-44 gap-8 md:gap-12 px-4 flex flex-col-reverse md:flex-row min-h-screen justify-center md:justify-between items-center text-center md:text-left">

    <div
      class="flex-1 font-black font-jakarta space-y-6 md:space-y-8 text-slate-700 flex flex-col items-center md:items-start w-full">
      <p class="text-7xl md:text-9xl">500</p>

      <p class="text-4xl md:text-7xl">
        Oops! <br class="hidden md:block" /> Something went wrong.
      </p>

      <a href="{{ localized_route('home') }}"
        class="group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-slate-800 px-6 font-medium text-neutral-200 transition hover:scale-110 cursor-pointer w-max">
        <span>Back home</span>
        <div
          class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-12deg)_translateX(-100%)] group-hover:duration-1000 group-hover:[transform:skew(-12deg)_translateX(100%)]">
          <div class="relative h-full w-8 bg-white/20"></div>
        </div>
      </a>
    </div>

    <div class="flex-1 w-full flex justify-center md:justify-end">
      <img src="{{ asset('images/404.svg') }}" class="h-64 md:h-96 w-auto object-contain" alt="404 Not Found">
    </div>

  </main>
@endsection
