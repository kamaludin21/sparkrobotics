<?php

namespace App\Filament\Resources\Solutions\Tables;

use App\Filament\Resources\Solutions\SolutionResource;
use App\Models\Solution;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SolutionsTable
{

    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                    ->label('No.')
                    ->rowIndex(),
                TextColumn::make('title')
                    ->searchable(),
                TextColumn::make('list_title')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make()->mutateRecordDataUsing(function (Solution $record, array $data) {
                    return SolutionResource::mutateTranslatableData($record, $data);
                })->mutateDataUsing(function (Solution $record, array $data) {
                    $record->unsetRelation('translation');
                    return $data;
                }),
            ]);
    }
}
