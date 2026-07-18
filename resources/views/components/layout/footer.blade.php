<footer class="bg-black px-4 md:px-8 pt-16 pb-8 text-white md:px-16 lg:px-24">
  <div class="mb-32 grid grid-cols-1 gap-12 lg:grid-cols-3 lg:items-start">

    <div class="">
      <h2 class="mb-8 text-3xl leading-tight font-medium md:text-5xl lg:text-5xl">
        {{ t('brand_spark_robotics') }}
      </h2>
      <div class="gap-6 text-sm font-medium grid">
        <div class="flex items-center gap-2">
          <svg class="h-5 w-5 text-sky-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
          <span>{{ t('footer_1') }}</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="h-5 w-5 text-sky-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
          <span>{{ t('footer_2') }}</span>
        </div>
        <div class="flex items-center gap-2">
          <svg class="h-5 w-5 text-sky-600" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd"
              d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
              clip-rule="evenodd" />
          </svg>
          <span>{{ t('footer_3') }}</span>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 gap-12 lg:col-span-2 lg:grid-cols-10">

      <div class=" lg:col-span-7">
        <div class="mapouter rounded-xl overflow-hidden">
          <div class="gmap_canvas"><iframe title="Office location" class="gmap_iframe" width="100%" frameborder="0" scrolling="no"
              marginheight="0" marginwidth="0"
              src="https://maps.google.com/maps?width=520&amp;height=400&amp;hl=en&amp;q=pt%20spark%20space%20indonesia&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
            <br />
            <style>
              .gmap_canvas {
                overflow: hidden;
                background: none !important;
                width: 100%;
                height: 400px;
              }

              .gmap_iframe {
                height: 400px !important;
              }
            </style>
          </div>
          <style>
            .mapouter {
              position: relative;
              text-align: right;
              width: 100%;
              height: 400px;
            }
          </style>
        </div>
      </div>

      <div class="flex flex-col items-start lg:col-span-3 lg:mt-2">
        <p class="text-lg font-semibold text-white">{{ t('footer_address') }}</p>
        <p class="mb-6 text-lg leading-relaxed text-gray-300">{{ t('footer_address_value') }}</p>
        <a href="https://maps.app.goo.gl/ibwKNihvTNtdMVzY7" target="_blank"
          class="group relative inline-flex gap-1 h-12 items-center justify-center rounded-full bg-white px-5 font-medium text-slate-900">
          <span>{{ t('footer_btn_map') }}</span>
          <div class="relative ml-1 h-5 w-5 overflow-hidden">
            <div class="absolute transition-all duration-200 group-hover:-translate-y-5 group-hover:translate-x-4">
              <svg stroke-width="2" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg"
                class="h-5 w-5">
                <path
                  d="M3.64645 11.3536C3.45118 11.1583 3.45118 10.8417 3.64645 10.6465L10.2929 4L6 4C5.72386 4 5.5 3.77614 5.5 3.5C5.5 3.22386 5.72386 3 6 3L11.5 3C11.6326 3 11.7598 3.05268 11.8536 3.14645C11.9473 3.24022 12 3.36739 12 3.5L12 9.00001C12 9.27615 11.7761 9.50001 11.5 9.50001C11.2239 9.50001 11 9.27615 11 9.00001V4.70711L4.35355 11.3536C4.15829 11.5488 3.84171 11.5488 3.64645 11.3536Z"
                  fill="currentColor" fill-rule="evenodd" clip-rule="evenodd"></path>
              </svg>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-5 w-5 -translate-x-4">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0" />
              </svg>
            </div>
          </div>
        </a>
      </div>

    </div>
  </div>

  <div class="mb-8 grid grid-cols-1 gap-8 md:grid-cols-3 md:items-center">
    <div class="flex items-center justify-center gap-2 md:justify-self-start">
      <img src="{{ asset('images/spark-footer.png') }}" class="h-10 w-auto" alt="">
    </div>
    <nav class="flex flex-wrap justify-center gap-6 text-sm text-gray-300 md:justify-self-center">
      <a href="{{ localized_route('home') }}" class="transition hover:text-white">{{ t('footer_nav_home') }}</a>
      <a href="{{ localized_route('products.index') }}"
        class="transition hover:text-white">{{ t('footer_nav_products') }}</a>
      <a href="{{ localized_route('solutions.index') }}"
        class="transition hover:text-white">{{ t('footer_nav_solutions') }}</a>
      <a href="{{ localized_route('news.index') }}" class="transition hover:text-white">{{ t('footer_nav_news') }}</a>
    </nav>
    <div class="flex justify-center gap-1 md:justify-self-end">
      <a href="mailto:{{ $contact->email }}" aria-label="Email"
        class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors">
        <x-icons.email class="w-auto h-5" />
      </a>

      <a href="tel:{{ preg_replace('/[^0-9+]/', '', $contact->mobile) }}" aria-label="Phone"
        class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors">
        <x-icons.phone class="w-auto h-5" />
      </a>

      <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $contact->whatsapp) }}" target="_blank"
        rel="noopener noreferrer" aria-label="WhatsApp"
        class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors">
        <x-icons.whatsapp-outline class="w-auto h-6" />
      </a>

      <a href="{{ Str::startsWith($contact->wechat, ['http://', 'https://', 'weixin://']) ? $contact->wechat : 'weixin://dl/chat?' . $contact->wechat }}"
        target="_blank" rel="noopener noreferrer" aria-label="WeChat"
        class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors">
        <x-icons.wechat class="w-auto h-6" />
      </a>

      <a href="{{ Str::startsWith($contact->instagram, ['http://', 'https://']) ? $contact->instagram : 'https://instagram.com/' . ltrim($contact->instagram, '@') }}"
        target="_blank" rel="noopener noreferrer" aria-label="Instagram"
        class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors">
        <x-icons.instagram class="w-auto h-5" />
      </a>

      <a href="{{ Str::startsWith($contact->tiktok, ['http://', 'https://']) ? $contact->tiktok : 'https://www.tiktok.com/@' . ltrim($contact->tiktok, '@') }}"
        target="_blank" rel="noopener noreferrer" aria-label="TikTok"
        class="flex items-center justify-center w-10 h-10 rounded-full bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white transition-colors">
        <x-icons.tiktok class="w-auto h-5" />
      </a>
    </div>

  </div>
  <hr class="my-8 border-slate-800" />
  <div class="text-sm text-slate-200 text-center">
    <p class="tracking-wide">&copy; 2026 PT SPARK SPACE
      INDONESIA</p>
  </div>
</footer>
