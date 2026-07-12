<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('inbox.show_inbox_form', true);
        $this->migrator->add('inbox.email_to', 'kamal.zyel@gmail.com');
    }
};
