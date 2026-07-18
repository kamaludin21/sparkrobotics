@extends('layout.app', ['activePage' => 'news'])

@section('content')
  <main class="main-wrapper px-4 py-12 lg:py-32">
    {{-- Back Button --}}
    <div>
      <a href="{{ url()->previous() }}"
        class="inline-flex items-center text-sm font-semibold text-blue-600 transition-colors hover:text-blue-800">
        <svg class="mr-2 h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        {{ t('general_goback') }}
      </a>
    </div>

    <section class="py-10 space-y-6">

      <div class="px-2 py-1 bg-slate-200 rounded-lg ring-slate-300 ring-1 w-fit">
        <span class="text-slate-600 font-medium">{{ $article->category->title }}</span>
      </div>
      <h1 class="text-4xl md:text-5xl w-full lg:max-w-[66.666%] font-bold text-slate-700 leading-tight md:leading-[4rem]">
        {{ $article->title }}
      </h1>
      <div
        class="flex flex-col md:flex-row justify-between items-start md:items-center border-b border-slate-200 pb-6 mb-10 gap-6">
        <div class="flex items-center gap-4">
          <span class="text-slate-500 text-base font-light">
            {{ app()->getLocale() === 'id'
                ? $article->updated_at->translatedFormat('d F Y')
                : $article->updated_at->format('F d, Y') }}
          </span>
        </div>

        {{-- Share Button with Alpine.js --}}
        <div x-data="{
            copied: false,
            copyUrl() {
                if (!navigator.clipboard) {
                    alert('Your browser does not support copying to clipboard.');
                    return;
                }
                navigator.clipboard.writeText(window.location.href).then(() => {
                    this.copied = true;
                    setTimeout(() => this.copied = false, 2000);
                }).catch(err => {
                    console.error('Failed to copy URL: ', err);
                });
            }
        }" @click="copyUrl()"
          class="relative flex items-center gap-2 text-slate-600 cursor-pointer hover:text-blue-600 transition-colors select-none">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
            class="icon icon-tabler icons-tabler-outline icon-tabler-link">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M9 15l6 -6" />
            <path d="M11 6l.463 -.536a5 5 0 0 1 7.071 7.072l-.534 .464" />
            <path d="M13 18l-.397 .534a5.068 5.068 0 0 1 -7.127 0a4.972 4.972 0 0 1 0 -7.071l.524 -.463" />
          </svg>
          <span class="text-sm font-semibold tracking-widest"
            x-text="copied ? 'Copied!' : '{{ t('newsPage_share') }}'"></span>

          {{-- Floating Notification (Toast) --}}
          <div x-show="copied" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="o pacity-0 translate-y-2" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed bottom-6 right-6 bg-green-600 text-white px-4 py-2 rounded-md shadow-lg z-50 flex items-center gap-2 text-sm font-medium"
            style="display: none;">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
              stroke="currentColor" stroke-width="3">
              <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
            </svg>
            <span>URL copied to clipboard!</span>
          </div>
        </div>

      </div>

      {{-- Grid Content - Fix: tambahkan items-start --}}
      <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-start">

        {{-- Sidebar Tags --}}
        <div class="lg:col-span-3 order-2 lg:order-1">
          <h3 class="text-sm font-semibold tracking-wide text-slate-800 mb-4">{{ t('newsPage_tag') }}:</h3>
          <div class="flex flex-wrap gap-2">
            @foreach ($article->tags as $tag)
              <span
                class="bg-slate-100 text-slate-800 text-sm font-medium px-3 py-1.5 rounded-sm hover:bg-slate-200 cursor-pointer transition">
                {{ $tag->name }}
              </span>
            @endforeach
          </div>
        </div>

        {{-- Main Content --}}
        <div class="lg:col-span-9 order-1 lg:order-2">
          <div class="mb-6">
            @if (isset($article->type) && $article->type === 'video' && $article->video_url)
              <iframe class="w-full aspect-[16/9] ring ring-slate-200" src="{{ $article->embed_video_url }}"
                title="{{ $article->title }}" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
              </iframe>
            @else
              <img class="w-full h-auto aspect-[16/9] object-contain ring ring-slate-200"
                src="{{ $article->image ? Storage::url($article->image) : 'https://via.placeholder.com/700x400' }}"
                alt="{{ $article->title }}">
            @endif
          </div>
          <div class="content-html overflow-visible">
            {!! $article->content !!}
          </div>
        </div>

      </div>
    </section>
  </main>
@endsection
