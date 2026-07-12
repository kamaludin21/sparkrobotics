<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class Inbox extends Settings
{
  public ?bool $show_inbox_form = true;
  public ?string $email_to = null;
  public static function group(): string
  {
    return 'inbox';
  }
}
