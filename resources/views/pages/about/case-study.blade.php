@extends('layout.app', ['activePage' => 'case-studies'])

@section('content')
  <section class="max-w-5xl mx-auto px-4 py-24 md:py-32">
    <header class="text-center mb-8 space-y-6">
      <div>
        <a href="{{ localized_route('about.case_study') }}"
          class="inline-flex items-center text-sm font-semibold text-blue-600 transition-colors hover:text-blue-800">
          <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
          </svg>
          {{ t('general_goback') }}
        </a>
      </div>
      <h1 class="text-4xl md:text-5xl font-bold mb-4 tracking-tight text-slate-700">{{ $caseStudy->title }}</h1>
    </header>

    <div x-data="{
        activeImage: 0,
        images: {{ json_encode($processedImages) }}
    }" class="w-full max-w-4xl mx-auto mb-10">

      <figure class="relative mb-4">
        <img :src="images[activeImage].url" :alt="images[activeImage].caption"
          class="w-full h-auto aspect-[16/9] object-cover rounded-xl shadow-lg ring ring-slate-200">
        <figcaption x-text="images[activeImage].caption" class="mt-2 text-sm text-center text-gray-500 italic">
        </figcaption>
      </figure>

      <div class="flex justify-center gap-2 flex-wrap">
        <template x-for="(img, index) in images" :key="index">
          <button @click="activeImage = index"
            class="w-20 h-20 rounded-lg overflow-hidden border-2 transition-all duration-300"
            :class="activeImage === index ? 'border-blue-500 ring-2 ring-blue-200' :
                'border-transparent opacity-60 hover:opacity-100'">
            <img :src="img.url" class="w-full h-full object-cover" :alt="'Thumbnail ' + (index + 1)">
          </button>
        </template>
      </div>
    </div>

    <article class="content-html prose prose-lg max-w-none text-slate-700">
      {!! $caseStudy->content !!}
    </article>

    <div
      class="mt-12 flex flex-col md:flex-row items-start md:items-center justify-between border-t border-gray-200 pt-12 gap-6">
      <h3 class="text-4xl font-bold text-slate-800">{{ t('studyCasePage_cta_title') }}</h3>
      <a href="{{ localized_route('about.contact') }}"
        class="group relative shrink-0 inline-flex h-[calc(48px+8px)] items-center justify-center rounded-full bg-sky-600 py-1 pr-14 pl-6 font-medium text-neutral-50">
        <span class="z-10 pr-2 whitespace-nowrap">{{ t('studyCasePage_cta_btn') }}</span>
        <div
          class="absolute right-1 inline-flex h-12 w-12 items-center justify-end rounded-full bg-sky-700 transition-[width] group-hover:w-[calc(100%-8px)]">
          <div class="mr-3.5 flex items-center justify-center">
            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" class="h-5 w-5 text-neutral-50">
              <path
                d="M8.14645 3.14645C8.34171 2.95118 8.65829 2.95118 8.85355 3.14645L12.8536 7.14645C13.0488 7.34171 13.0488 7.65829 12.8536 7.85355L8.85355 11.8536C8.65829 12.0488 8.34171 12.0488 8.14645 11.8536C7.95118 11.6583 7.95118 11.3417 8.14645 11.1464L11.2929 8H2.5C2.22386 8 2 7.77614 2 7.5C2 7.22386 2.22386 7 2.5 7H11.2929L8.14645 3.85355C7.95118 3.65829 7.95118 3.34171 8.14645 3.14645Z"
                fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
            </svg>
          </div>
        </div>
      </a>
    </div>

  </section>
@endsection
