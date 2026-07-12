<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Hero extends Settings
{
  public ?string $company_name = null;
  public ?string $image = null;

  public ?string $tagline_id = null;
  public ?string $tagline_en = null;

  public ?string $designation_id = null;
  public ?string $designation_en = null;

  public array $slides = [];

  public static function group(): string
  {
    return 'hero';
  }
}
