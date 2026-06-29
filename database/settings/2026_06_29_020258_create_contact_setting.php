<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.company_name', 'PT SPARK SPACE INDONESIA');
        $this->migrator->add('contact.mobile', '+62 812 288 0063');
        $this->migrator->add('contact.whatsapp', '+62 812 288 0063');
        $this->migrator->add('contact.wechat', 'Sparkroboticsid');
        $this->migrator->add('contact.instagram', '@sparkrobotics.id');
        $this->migrator->add('contact.tiktok', '@sparkrobotics');
    }
};
