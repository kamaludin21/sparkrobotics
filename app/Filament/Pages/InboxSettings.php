<?php

namespace App\Filament\Pages;

use BackedEnum, UnitEnum;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Forms\Components\Toggle;
use App\Settings\Inbox;
use Filament\Forms\Components\TextInput;

class InboxSettings extends SettingsPage
{
    protected static ?int $navigationSort = 5;
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static string | UnitEnum | null $navigationGroup = 'System and Settings';

    protected static string $settings = Inbox::class;


    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Toggle::make('show_inbox_form')
                    ->label('Tampilkan Form Inbox')
                    ->default(false)
                    ->inline(false)
                    ->columnSpan(1),
                TextInput::make('email_to')
                    ->label('Email untuk menerima notifikasi')
                    ->required()
                    ->email()
                    ->maxLength(255)
                    ->columnSpan(1),
            ]);
    }
}
