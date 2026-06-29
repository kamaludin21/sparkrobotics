<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Contact extends Settings
{
  public ?string $company_name = null;
  public ?string $mobile = null;
  public ?string $whatsapp = null;
  public ?string $wechat = null;
  public ?string $instagram = null;
  public ?string $tiktok = null;

  public static function group(): string
  { 
    return 'contact';
  }
}
