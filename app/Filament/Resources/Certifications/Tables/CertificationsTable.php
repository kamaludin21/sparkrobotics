<?php

namespace App\Filament\Resources\Certifications\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use TinusG\FilamentHoverImageColumn\HoverImageColumn;

class CertificationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                    ->label('No.')
                    ->rowIndex(),
                HoverImageColumn::make('image')
                    ->label('Image'),
                TextColumn::make('title')
                    ->searchable()
                    ->wrap()
                    ->lineClamp(2),
                TextColumn::make('subtitle')
                    ->searchable()
                    ->wrap()
                    ->lineClamp(2),
            ])
            ->recordActions([
                EditAction::make(),
            ]);
    }
}
