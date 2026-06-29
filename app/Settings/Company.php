<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Company extends Settings
{
  // ── Hero Section ──────────────────────────────────────────
  public ?string $tagline_id = null;
  public ?string $company_name_id = null;
  public ?string $designation_id = null;
  public ?string $description_id = null;
  public ?string $tagline_en = null;
  public ?string $company_name_en = null;
  public ?string $designation_en = null;
  public ?string $description_en = null;

  // ── Siapa Kami? Section ───────────────────────────────────
  public ?array $about_image = [];
  public ?string $section_title_id = null;
  public ?string $about_id = null;
  public ?string $section_title_en = null;
  public ?string $about_en = null;

  // ── Industri yang Kami Dukung Section ─────────────────────
  public ?string $industries_title_id = null;
  public ?string $industries_subtitle_id = null;
  public ?string $industries_title_en = null;
  public ?string $industries_subtitle_en = null;
  public array $industries = [];

  // ── Dipercaya Oleh Section ────────────────────────────────
  public ?string $brand_title_id = null;
  public ?string $brand_subtitle_id = null;
  public ?string $brand_title_en = null;
  public ?string $brand_subtitle_en = null;
  public array $clients = [];

  public static function group(): string
  {
    return 'company';
  }

  protected $casts = [
    'about_image' => 'array',
    'industries' => 'array',
    'clients' => 'array',
  ];
}
