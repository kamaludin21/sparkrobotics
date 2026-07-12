<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('contact.company_name', 'PT SPARK SPACE INDONESIA');
        $this->migrator->add('contact.email', 'sales@sparkroboticsid.com');
        $this->migrator->add('contact.mobile', '628122880063');
        $this->migrator->add('contact.whatsapp', '6289513044307');
        $this->migrator->add('contact.whatsapp_message', 'Halo, saya melihat layanan di website Anda sparkrobotics.id Saya ingin berdiskusi lebih lanjut');
        $this->migrator->add('contact.wechat', 'Sparkroboticsid');
        $this->migrator->add('contact.instagram', '@sparkrobotics.id');
        $this->migrator->add('contact.tiktok', '@sparkrobotics');
    }
};
