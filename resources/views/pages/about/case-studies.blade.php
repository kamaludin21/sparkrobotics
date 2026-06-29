@extends('layout.app', ['activePage' => 'case-studies'])

@section('content')
  <section class="main-wrapper px-4 py-24 md:py-32 space-y-12">
    <h1 class="text-4xl md:text-5xl font-bold text-slate-700 font-jakarta">{{ t('studyCasePage_title') }}</h1>

    <div class="space-y-0">
      @forelse($caseStudies as $index => $case)
        @php
          $firstImage = $case->images[0]['logo'] ?? null;
          $thumbnail = $firstImage
              ? \Illuminate\Support\Facades\Storage::url(str_replace('livewire-file:', '', $firstImage))
              : 'https://images.unsplash.com/photo-1508614589041-895b88991e3e?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80';
          $showImageFirst = $index % 2 === 0;
        @endphp

        {{-- Grid per case study --}}
        <div class="grid grid-cols-1 md:grid-cols-2">
          @if ($showImageFirst)
            <div class="h-80 md:h-[500px]">
              <img src="{{ $thumbnail }}" alt="{{ $case->title }}" class="w-full h-full object-contain">
            </div>
            <div class="bg-white p-6 md:p-10 lg:p-16 flex flex-col justify-between h-auto">
              <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-tight">{{ $case->title }}</h2>
                <p class="text-gray-500 text-sm md:text-base leading-relaxed line-clamp-4">
                  {{ Str::limit(strip_tags($case->content), 250) }}
                </p>
              </div>
              <div class="text-right mt-6">
                <a href="{{ localized_route('about.case_study.detail', $case->slug) }}"
                  class="group relative inline-flex h-[calc(48px+8px)] items-center justify-center rounded-full bg-sky-600 py-1 pl-6 pr-14 font-medium text-neutral-50">
                  <span class="z-10 pr-2">{{ t('studyCasePage_more_btn') }}</span>
                  <div
                    class="absolute right-1 inline-flex h-12 w-12 items-center justify-end rounded-full bg-sky-700 transition-[width] group-hover:w-[calc(100%-8px)]">
                    <div class="mr-3.5 flex items-center justify-center">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                        class="h-5 w-5 text-neutral-50">
                        <path
                          d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                          fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          @else
            <div class="bg-sky-600 p-6 md:p-10 lg:p-16 flex flex-col justify-between h-auto text-white">
              <div>
                <h2 class="text-3xl md:text-4xl font-bold mb-4 leading-tight">{{ $case->title }}</h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed line-clamp-4">
                  {{ Str::limit(strip_tags($case->content), 250) }}
                </p>
              </div>
              <div class="text-right mt-6">
                <a href="{{ localized_route('about.case_study.detail', $case->slug) }}"
                  class="group relative inline-flex h-[calc(48px+8px)] items-center justify-center rounded-full bg-slate-800 py-1 pl-6 pr-14 font-medium text-neutral-50">
                  <span class="z-10 pr-2">{{ t('studyCasePage_more_btn') }}</span>
                  <div
                    class="absolute right-1 inline-flex h-12 w-12 items-center justify-end rounded-full bg-slate-700 transition-[width] group-hover:w-[calc(100%-8px)]">
                    <div class="mr-3.5 flex items-center justify-center">
                      <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                        class="h-5 w-5 text-neutral-50">
                        <path
                          d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                          fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
                      </svg>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="h-80 md:h-[500px]">
              <img src="{{ $thumbnail }}" alt="{{ $case->title }}" class="w-full h-full object-contain">
            </div>
          @endif
        </div>
        {{-- End Grid per case study --}}
      @empty
        <div class="text-center py-20">
          <p class="text-gray-400">{{ t('studyCasePage_empty') }}</p>
        </div>
      @endforelse
    </div>
  </section>
@endsection
