<?php
// Versi Development
use Illuminate\Support\Facades\Cache;
use App\Models\Translation; // Pastikan namespace model disesuaikan

if (! function_exists('t')) {
  function t(string $key, ?string $locale = null): string
  {
    $locale = $locale
      ? 'lang_' . $locale
      : 'lang_' . app()->getLocale();

    // Pisahkan logika query ke dalam variabel closure
    $getTranslation = function () use ($key, $locale) {
      $translation = Translation::query()
        ->where('key', $key)
        ->first();

      if (! $translation) {
        return $key;
      }

      return $translation->{$locale} ?? $key;
    };

    // Jika mode development (local), langsung jalankan query tanpa cache
    if (app()->isLocal()) {
      return $getTranslation();
    }

    // Jika mode production, gunakan Cache
    return Cache::remember(
      "translation.{$locale}.{$key}",
      now()->addHour(),
      $getTranslation
    );
  }
}


// Versi Production
// use App\Models\Translation;
// use Illuminate\Support\Facades\Cache;

// if (! function_exists('t')) {

//   function t(string $key, ?string $locale = null): string
//   {
//     $locale = $locale
//       ? 'lang_' . $locale
//       : 'lang_' . app()->getLocale();

//     return Cache::remember(
//       "translation.{$locale}.{$key}",
//       now()->addHour(),
//       function () use ($key, $locale) {

//         $translation = Translation::query()
//           ->where('key', $key)
//           ->first();

//         if (! $translation) {
//           return $key;
//         }

//         return $translation->{$locale} ?? $key;
//       }
//     );
//   }
// }

if (! function_exists('locale_route')) {
  /**
   * Generate localized route dynamically based on current app locale.
   *
   * @param  string  $name        Nama dasar rute (contoh: 'about.contact')
   * @param  mixed   $parameters  Parameter rute tambahan (opsional)
   * @param  bool    $absolute    Apakah URL absolut atau relatif
   * @return string
   */
  function locale_route($name, $parameters = [], $absolute = true)
  {
    $locale = app()->getLocale();
    $routeName = $locale . '.' . $name; // Menggabungkan prefix bahasa dan nama rute

    // Jika bahasanya bukan default (en), kita wajib suntikkan parameter {locale}
    if ($locale !== 'en') {
      // Ubah parameter menjadi array jika sebelumnya bukan array
      $parameters = is_array($parameters) ? $parameters : [$parameters];
      $parameters = array_merge(['locale' => $locale], $parameters);
    }

    return route($routeName, $parameters, $absolute);
  }
}

if (! function_exists('switch_language_url')) {
  /**
   * Generate URL untuk tombol ganti bahasa di halaman yang sama.
   *
   * @param string $targetLocale ('en' atau 'id')
   * @return string
   */
  function switch_language_url($targetLocale)
  {
    $currentRoute = request()->route();

    // Jika rute saat ini tidak ditemukan (misal di halaman 404), kembalikan ke Beranda
    if (!$currentRoute || !$currentRoute->getName()) {
      return url($targetLocale === 'en' ? '/' : '/id');
    }

    $currentName = $currentRoute->getName();
    $parameters = $currentRoute->parameters();

    // Hapus prefix 'en.' atau 'id.' dari nama rute untuk mendapatkan nama dasarnya
    // Contoh: 'id.about.case_study' menjadi 'about.case_study'
    $baseName = preg_replace('/^(en\.|id\.)/', '', $currentName);

    // Sesuaikan parameter locale untuk rute tujuan
    if ($targetLocale === 'en') {
      unset($parameters['locale']); // Grup 'en' tidak punya parameter {locale} di URL
    } else {
      $parameters['locale'] = $targetLocale; // Grup 'id' wajib punya parameter {locale}
    }

    // Return URL menggunakan rute yang sama, tapi dengan bahasa tujuan
    return route($targetLocale . '.' . $baseName, $parameters);
  }
}
