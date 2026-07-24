<?php

namespace App\Filament\Resources\Translations;

use App\Filament\Resources\Translations\Pages\CreateTranslation;
use App\Filament\Resources\Translations\Pages\EditTranslation;
use App\Filament\Resources\Translations\Pages\Languages;
use App\Filament\Resources\Translations\Pages\ListTranslations;
use App\Filament\Resources\Translations\Schemas\TranslationForm;
use App\Filament\Resources\Translations\Tables\TranslationsTable;
use App\Models\Translation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class TranslationResource extends Resource
{
    protected static ?int $navigationSort = 6;
    protected static ?string $model = Translation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedLanguage;
    protected static string | UnitEnum | null $navigationGroup = 'System and Settings';

    public static function form(Schema $schema): Schema
    {
        return TranslationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return TranslationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Languages::route('/'),
            // 'index' => ListTranslations::route('/'),
            'create' => CreateTranslation::route('/create'),
            // 'edit' => EditTranslation::route('/{record}/edit'),
        ];
    }
}
