<?php

namespace App\Filament\Resources\Translations\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TranslationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('key')
                    ->label('Key')
                    ->required()
                    ->unique('translations', 'key', ignoreRecord: true),
                TextInput::make('lang_id')
                    ->label('Indonesian')
                    ->nullable(),
                TextInput::make('lang_en')
                    ->label('English')
                    ->nullable(),
            ]);
    }
}
