<?php

namespace App\Filament\Resources\Solutions\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class SolutionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextArea::make('title')
                    ->autosize()
                    ->rows(1)
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('description')
                    ->rows(5)
                    ->columnSpanFull(),
                TextInput::make('list_title')
                    ->label('List Title')
                    ->required(),
                Grid::make('1')
                    ->schema([
                        Repeater::make('list_items')
                            ->label('List')
                            ->schema([
                                TextInput::make('title')
                                    ->required(),

                                Textarea::make('subtitle')
                                    ->rows(2),
                            ])
                            ->defaultItems(0)
                            ->collapsible()
                            ->cloneable()
                            ->reorderable()
                            ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                            ->grid(3),
                    ])->columnSpanFull(),
                FileUpload::make('images')
                    ->label('Solutions Illustrasion')
                    ->maxSize(500)
                    ->multiple()
                    ->image()
                    ->acceptedFileTypes([
                        'image/jpg',
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->optimize('webp')
                    ->directory('solutions/' . now()->format('Y-m'))
                    ->imageEditor()
                    ->openable()
                    ->downloadable()
                    ->helperText('Maks Size: 500KB per gambar')
                    ->required(),
            ]);
    }
}
