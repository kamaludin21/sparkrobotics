@extends('layout.app', ['activePage' => 'contact'])

@section('content')
  <main
    class="relative flex min-h-screen items-center justify-center overflow-hidden bg-sky-600  py-24 md:py-32 text-white">
    <div class="pointer-events-none absolute inset-0 opacity-10 mix-blend-overlay"
      style="background-image: radial-gradient(circle at top right, white, transparent 50%);"></div>

    <div class="relative z-10 grid w-full main-wrapper px-4 grid-cols-1 items-center gap-12 lg:grid-cols-2 lg:gap-20">

      <div class="max-w-lg space-y-10">
        <div>
          <h1 class="mb-5 text-4xl md:text-5xl font-bold text-white font-jakarta">{{ t('contactPage_title') }}</h1>
          <p class="text-lg leading-relaxed text-sky-100">{{ t('contactPage_subtitle') }}</p>
          {{-- <h1 class="mb-5 text-4xl md:text-5xl font-bold text-white font-jakarta">Contact Us</h1>
          <p class="text-lg leading-relaxed text-sky-100">Not sure what you need? Our team will be happy to listen to you
            and suggest solutions you hadn't considered.</p> --}}
        </div>

        <div class="space-y-6 pt-4">
          <p><strong>{{ $contact->company_name }}</strong></p>
          <div class="flex items-center gap-4 text-sky-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-80">
              <path
                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
              </path>
            </svg>
            <span class="text-base font-medium">Mobile: {{ $contact->mobile }}</span>
          </div>
          <div class="flex items-center gap-4 text-sky-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-80">
              <path
                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z">
              </path>
            </svg>
            <span class="text-base font-medium">WhatsApp: {{ $contact->whatsapp }}</span>
          </div>
          <div class="flex items-center gap-4 text-sky-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-80">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            <span class="text-base font-medium">WeChat: {{ $contact->wechat }}</span>
          </div>
          <div class="flex items-center gap-4 text-sky-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-80">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
              <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
              <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
            </svg>
            <span class="text-base font-medium">Instagram: {{ $contact->instagram }}</span>
          </div>
          <div class="flex items-center gap-4 text-sky-50">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="opacity-80">
              <path d="M9 18V5l12-2v13"></path>
              <circle cx="6" cy="18" r="3"></circle>
              <circle cx="18" cy="16" r="3"></circle>
            </svg>
            <span class="text-base font-medium">TikTok: {{ $contact->tiktok }}</span>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden rounded-2xl bg-white p-4 text-slate-800 shadow-2xl sm:p-12">
        <svg class="pointer-events-none absolute top-0 right-0 translate-x-1/2 -translate-y-1/2 transform text-slate-200"
          width="250" height="250" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="100" cy="100" r="60" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
          <circle cx="100" cy="100" r="80" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
          <circle cx="100" cy="100" r="100" stroke="currentColor" stroke-width="1.5" opacity="0.5" />
        </svg>

        <div class="relative z-10 space-y-8">
          <div>
            <h2 class="mb-1 text-3xl font-semibold text-slate-900 font-jakarta ">{{ t('contactPage_form_title') }}</h2>
            <p class="text-xl text-slate-600">{{ t('contactPage_form_subtitle') }}</p>
            {{-- <h2 class="mb-1 text-3xl font-semibold text-slate-900 font-jakarta ">We'd love to hear from you!</h2>
            <p class="text-xl text-slate-600">Let's get in touch</p> --}}
          </div>

          @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50" role="alert">
              {{ session('success') }}
            </div>
          @endif

          @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
              <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif

          <form method="POST" action="{{ route('contact.submit') }}" class="space-y-6">
            @csrf

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">{{ t('contactPage_form_name') }}</label>
                <input type="text" name="full_name" value="{{ old('full_name') }}" required
                  class="w-full rounded-lg border border-slate-300 px-4 py-3 transition-all outline-none focus:border-transparent focus:ring-2 focus:ring-sky-600" />
              </div>
              <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">{{ t('contactPage_form_company') }}</label>
                <input type="text" name="company" value="{{ old('company') }}"
                  class="w-full rounded-lg border border-slate-300 px-4 py-3 transition-all outline-none focus:border-transparent focus:ring-2 focus:ring-sky-600" />
              </div>
            </div>

            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
              <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">{{ t('contactPage_form_email') }}</label>
                <div class="relative">
                  <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3 text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                      fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round">
                      <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                      <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                  </div>
                  <input type="email" name="email" value="{{ old('email') }}" placeholder="olivia@company.com"
                    required
                    class="w-full rounded-lg border border-slate-300 py-3 pr-4 pl-10 placeholder-slate-400 transition-all outline-none focus:border-transparent focus:ring-2 focus:ring-sky-600" />
                </div>
              </div>
              <div class="space-y-2">
                <label class="block text-sm font-medium text-slate-700">{{ t('contactPage_form_phone') }}</label>
                <div
                  class="flex overflow-hidden rounded-lg border border-slate-300 transition-all focus-within:ring-2 focus-within:ring-sky-600">
                  <input type="tel" name="phone" value="{{ old('phone') }}" placeholder="+62 812 0000 0000"
                    class="w-full px-4 py-3 placeholder-slate-400 outline-none" />
                </div>
              </div>
            </div>

            <div class="space-y-2">
              <label class="block text-sm font-medium text-slate-700">{{ t('contactPage_form_message') }}</label>
              <textarea name="message" rows="4" placeholder="{{ t('contactPage_form_message_placeholder') }}" required
                class="w-full resize-none rounded-lg border border-slate-300 px-4 py-3 placeholder-slate-400 transition-all outline-none focus:border-transparent focus:ring-2 focus:ring-sky-600">{{ old('message') }}</textarea>
            </div>

            <div class="pt-2">
              <button type="submit"
                class="rounded-lg bg-sky-600 px-8 py-3 font-semibold text-white shadow-sm transition duration-200 hover:bg-sky-700">
                {{ t('contactPage_form_submit') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection
