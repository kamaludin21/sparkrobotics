<?php

namespace App\Filament\Pages;

use App\Settings\Contact;
use BackedEnum, UnitEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ContactSetting extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = Contact::class;

    protected static string | UnitEnum | null $navigationGroup = 'Settings';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Perusahaan')
                    ->icon('heroicon-o-building-office-2')
                    ->schema([
                        TextInput::make('company_name')
                            ->label('Nama Perusahaan')
                            ->placeholder('Masukkan nama perusahaan')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-building-office'),
                        TextInput::make('email')
                            ->label('Email Perusahaan')
                            ->placeholder('Masukkan email perusahaan')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-envelope'),
                    ])
                    ->columns(1),

                Section::make('Nomor Telepon')
                    ->description('Nomor kontak utama bisnis')
                    ->icon('heroicon-o-phone')
                    ->schema([
                        TextInput::make('mobile')
                            ->label('Nomor Mobile')
                            ->placeholder('Contoh: 08123456789')
                            ->maxLength(20)
                            ->prefixIcon('heroicon-o-device-phone-mobile'),
                    ])
                    ->columns(1),

                Section::make('Media Sosial & Chat')
                    ->description('Akun media sosial dan platform chat')
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->schema([
                        TextInput::make('whatsapp')
                            ->label('WhatsApp')
                            ->placeholder('Contoh: 628123456789')
                            ->maxLength(20)
                            ->prefixIcon('heroicon-o-chat-bubble-oval-left'),
                        Textarea::make('whatsapp_message')
                            ->rows(1)
                            ->autosize()
                            ->label('Custom text whatsapp link')
                            ->maxLength(200),
                        TextInput::make('wechat')
                            ->label('WeChat ID')
                            ->placeholder('Masukkan WeChat ID')
                            ->maxLength(100)
                            ->prefixIcon('heroicon-o-chat-bubble-left'),
                    ])
                    ->columns(1),

                Section::make('Media Sosial')
                    ->description('Link profil media sosial bisnis')
                    ->icon('heroicon-o-globe-alt')
                    ->schema([
                        TextInput::make('instagram')
                            ->label('Instagram')
                            ->placeholder('Contoh: @username')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-camera'),
                        TextInput::make('tiktok')
                            ->label('TikTok')
                            ->placeholder('Contoh: @username')
                            ->maxLength(255)
                            ->prefixIcon('heroicon-o-video-camera'),
                    ])
                    ->columns(1),

            ]);
    }
}
