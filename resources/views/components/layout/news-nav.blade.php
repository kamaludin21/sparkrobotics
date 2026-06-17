<section class="flex flex-col lg:flex-row items-end lg:justify-between gap-8 lg:gap-0 pb-8 border-b border-slate-600">
  <div class="w-full lg:w-1/3">
    <h2 class="text-4xl md:text-5xl font-bold text-slate-700">{{ $title }}</h2>
  </div>
  <ul
    class="w-full lg:w-1/2 grid grid-cols-1 sm:grid-cols-2 gap-y-4 border-t border-slate-400 py-4 text-xl sm:text-2xl text-slate-600">
    {{-- Active menu using this class at <li> tag --}}
      {{-- class="bg-gradient-to-r from-sky-600 to-sky-50 pr-8 w-fit pl-2 text-white" --}}
    <li >
      <a href="/news" class="hover:text-slate-900 transition-colors">News</a>
    </li>
    <li>
      <a href="#" class="hover:text-slate-900 transition-colors">Blog</a>
    </li>
    <li aria-hidden="true" class="col-span-1 sm:col-span-2 border-t border-slate-400"></li>
    <li>
      <a href="#" class="hover:text-slate-900 transition-colors">Tutorial</a>
    </li>
    <li>
      <a href="#" class="hover:text-slate-900 transition-colors">Announcements</a>
    </li>
    <li aria-hidden="true" class="col-span-1 sm:col-span-2 border-t border-slate-400"></li>
    <li>
      <a href="#" class="hover:text-slate-900 transition-colors">Product</a>
    </li>
    <li>
      <a href="/news/download-center" class="hover:text-slate-900 transition-colors">Download Center</a>
    </li>
  </ul>
</section>
