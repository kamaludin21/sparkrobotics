<?php

namespace App\Filament\Resources\Categories\Tables;

use App\Filament\Resources\Categories\CategoryResource;
use App\Models\Category;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class CategoriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                    ->label('No.')
                    ->rowIndex(),
                ImageColumn::make('image')
                    ->label('Gambar'),
                TextColumn::make('name_id')
                    ->label('Nama (ID)')
                    ->state(fn(Category $record): ?string => $record->translate('id')?->name)
                    ->searchable(query: function (Builder $query, string $search) {
                        $query->whereTranslationLike('name', '%' . $search . '%', 'id');
                    }),

                // Kolom untuk Bahasa Inggris (EN)
                TextColumn::make('name_en')
                    ->label('Nama (EN)')
                    // Mengambil relasi translasi khusus 'en'
                    ->state(fn(Category $record): ?string => $record->translate('en')?->name)
                    ->searchable(query: function (Builder $query, string $search) {
                        // Mencari berdasarkan locale 'en'
                        $query->whereTranslationLike('name', '%' . $search . '%', 'en');
                    }),
            ])
            ->recordActions([
                EditAction::make()->mutateRecordDataUsing(function (Category $record, array $data) {
                    return CategoryResource::mutateTranslatableData($record, $data);
                })->mutateDataUsing(function (Category $record, array $data) {
                    $record->unsetRelation('translation');
                    return $data;
                }),
            ]);
    }
}
