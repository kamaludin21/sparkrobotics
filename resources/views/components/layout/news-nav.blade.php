@props(['title', 'active' => 'news'])

@php
  // Ambil semua kategori dari database
  $categories = \App\Models\ArticleCategory::all();

  // Fungsi pembantu untuk menentukan class aktif
  $isActive = function ($slug) use ($active) {
      return $active === $slug ? 'bg-gradient-to-r from-sky-600 to-sky-50 pr-8 w-fit pl-2 text-white' : '';
  };

  $isLinkActive = function ($slug) use ($active) {
      return $active === $slug ? '' : 'hover:text-slate-900 transition-colors';
  };

  $counter = 1;
@endphp

<section class="flex flex-col lg:flex-row items-end lg:justify-between gap-8 lg:gap-0 pb-8 border-b border-slate-600">
  <div class="w-full lg:w-1/3">
    <h2 class="text-4xl md:text-5xl font-bold text-slate-700 font-jakarta">{{ $title }}</h2>
  </div>

  <ul
    class="w-full lg:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-y-4 border-t border-slate-400 py-4 text-xl sm:text-2xl text-slate-600">

    {{-- Loop Kategori --}}
    @foreach ($categories as $category)
      @php
        $slug = $category->slug;
      @endphp

      <li class="{{ $isActive($slug) }}">
        <a href="{{ localized_route('news.category', $slug) }}" class="{{ $isLinkActive($slug) }}">
          {{ $category->title }}
        </a>
      </li>

      {{-- Garis pemisah setiap 2 item --}}
      @if ($counter % 2 == 0)
        <li aria-hidden="true" class="col-span-1 sm:col-span-2 border-t border-slate-400"></li>
      @endif
      @php $counter++ @endphp
    @endforeach

    {{-- Download Center (Manual) --}}
    <li class="{{ $isActive('download-center') }}">
      <a href="{{ localized_route('news.download_center') }}" class="{{ $isLinkActive('download-center') }}">
        Download Center
      </a>
    </li>
  </ul>
</section>
