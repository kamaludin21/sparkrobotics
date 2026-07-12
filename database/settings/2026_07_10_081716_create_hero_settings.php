<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('hero.company_name', 'SPARK Robotics');
        $this->migrator->add('hero.image', null);
        $this->migrator->add('hero.tagline_id', 'Keahlian Berpadu dengan Keunggulan');
        $this->migrator->add('hero.tagline_en', 'Expertise Meets Excellence');
        $this->migrator->add('hero.designation_id', 'Authorized Reseller of DJI Enterprise and Unitree');
        $this->migrator->add('hero.designation_en', 'Official distributor of DJI Enterprise and Unitree');
        $this->migrator->add('hero.slides', []);
    }
};
