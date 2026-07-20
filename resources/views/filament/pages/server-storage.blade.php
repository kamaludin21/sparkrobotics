<x-filament-panels::page>
  <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

    <!-- Card Total Storage -->
    <x-filament::section>
      <div class="flex items-center gap-4">
        <div class="p-3 bg-primary-500/10 text-primary-600 rounded-lg dark:text-primary-400">
          <!-- Perbaikan: Tambahkan inline style untuk width dan height -->
          <x-heroicon-o-server-stack style="width: 32px; height: 32px;" />
        </div>
        <div>
          <h2 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Storage</h2>
          <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $total }} GB</p>
        </div>
      </div>
    </x-filament::section>

    <!-- Card Terpakai -->
    <x-filament::section>
      <div class="flex items-center gap-4">
        <div class="p-3 bg-danger-500/10 text-danger-600 rounded-lg dark:text-danger-400">
          <!-- Perbaikan: Tambahkan inline style untuk width dan height -->
          <x-heroicon-o-chart-pie style="width: 32px; height: 32px;" />
        </div>
        <div>
          <h2 class="text-sm font-medium text-gray-500 dark:text-gray-400">Terpakai</h2>
          <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $terpakai }} GB</p>
        </div>
      </div>
    </x-filament::section>

    <!-- Card Tersedia -->
    <x-filament::section>
      <div class="flex items-center gap-4">
        <div class="p-3 bg-success-500/10 text-success-600 rounded-lg dark:text-success-400">
          <!-- Perbaikan: Tambahkan inline style untuk width dan height -->
          <x-heroicon-o-check-badge style="width: 32px; height: 32px;" />
        </div>
        <div>
          <h2 class="text-sm font-medium text-gray-500 dark:text-gray-400">Tersedia</h2>
          <p class="text-3xl font-bold text-gray-900 dark:text-white">{{ $tersedia }} GB</p>
        </div>
      </div>
    </x-filament::section>
  </div>

  <!-- Visualisasi Progress Bar -->
  <x-filament::section>
    <h3 class="text-lg font-bold mb-2">Kapasitas Penggunaan</h3>
    <div
      style="width: 100%; background-color: #e5e7eb; border-radius: 9999px; height: 16px; margin-top: 16px; overflow: hidden;"
      class="dark:bg-gray-700">
      <!-- Warna bar otomatis merah jika di atas 80% -->
      <div
        style="height: 100%; border-radius: 9999px; width: {{ $persentase }}%; background-color: {{ $persentase > 80 ? '#ef4444' : '#0ea5e9' }};">
      </div>
    </div>
    <p class="text-sm mt-2 text-gray-500 dark:text-gray-400">
      Disk terpakai sebesar {{ $persentase }}%.
    </p>
  </x-filament::section>
</x-filament-panels::page>
