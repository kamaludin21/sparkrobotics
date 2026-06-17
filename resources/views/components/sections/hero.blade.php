@props([
    'title' => 'product.title',
    'subtitle' => 'product.subtitle',
    'inquiryText' => 'inquiry.text',
    'background' => [
        'type' => 'media.type',
        'src' => 'media.source',
        'alt' => 'media.alt',
    ],
])

<section class="mx-auto container my-20 md:my-32 px-2 md:px-4 lg:px-0">
  <div class="relative flex h-[35rem] items-end overflow-hidden rounded-3xl">
    <div class="absolute inset-0 w-full h-full z-0 overflow-hidden bg-slate-900">
      @if (isset($background) && $background['type'] === 'video')
        <x-ui.youtube-wrapper
          class="absolute top-1/2 left-1/2 w-[150%] h-[150%] -translate-x-1/2 -translate-y-1/2 object-cover pointer-events-none"
          :videoId="$background['src']" />
      @else
        <img src="{{ $background['src'] }}" alt="{{ $background['alt'] ?? 'Hero Background' }}"
          class="w-full h-full object-cover object-center" />
      @endif
    </div>

    <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent z-10">
    </div>

    <div class="relative z-20 w-fit p-6 md:p-10">
      <div class="space-y-2 w-full md:max-w-1/2">
        <h1 class="text-5xl md:text-6xl font-medium font-jakarta text-white">{{ $title }}</h1>
        <p class="text-xl font-medium text-slate-100">{{ $subtitle }}</p>

        <div class="flex gap-2 items-center pt-2">
          <button
            class="flex items-center gap-2 text-white px-1 py-1 bg-white rounded-full ring ring-slate-300 transition hover:bg-slate-50">
            <span class="text-base font-semibold text-slate-800 pl-3">{{ $inquiryText }}</span>
            <div class="rounded-full bg-slate-800 p-0.5">
              <x-icons.narrow-right class="h-6 w-auto" />
            </div>
          </button>

          {{-- @if (isset($background) && $background['type'] === 'video')
            <button @click="toggleVideo()"
              class="flex items-center gap-1 px-4 py-1.5 bg-white/30 backdrop-blur-md rounded-full ring ring-slate-200 text-slate-50 transition hover:bg-white/40">
              <div class="w-6 h-6 flex items-center justify-center">
                <template x-if="playing">
                  <x-icons.pause-video class="h-6 w-auto" />
                </template>
                <template x-if="!playing">
                  <x-icons.play-video class="h-6 w-auto" />
                </template>
              </div>
              <span x-text="playing ? 'Pause Video' : 'Play Video'" class="text-base font-semibold"></span>
            </button>
          @endif --}}
        </div>
      </div>
    </div>
  </div>
</section>
