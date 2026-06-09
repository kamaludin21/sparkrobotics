<?php

use App\Models\Translation;
use Illuminate\Support\Facades\Cache;

if (! function_exists('t')) {

  function t(string $key, ?string $locale = null): string
  {
    $locale = $locale
      ? 'lang_' . $locale
      : 'lang_' . app()->getLocale();

    return Cache::remember(
      "translation.{$locale}.{$key}",
      now()->addHour(),
      function () use ($key, $locale) {

        $translation = Translation::query()
          ->where('key', $key)
          ->first();

        if (! $translation) {
          return $key;
        }

        return $translation->{$locale} ?? $key;
      }
    );
  }
}
