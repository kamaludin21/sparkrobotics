<?php

namespace App\Filament\Resources\Solutions\Schemas;

use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
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
                FileUpload::make('images')
                    ->label('Solutions Illustrasion')
                    ->maxSize(500)
                    ->multiple()
                    ->image()
                    ->disk('public')
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
                TranslatableTabs::make()
                    ->localeTabSchema(fn(TranslatableTab $tab) => [
                        TextArea::make($tab->makeName('title'))
                            ->autosize()
                            ->rows(1)
                            ->required()
                            ->columnSpanFull(),
                        Textarea::make($tab->makeName('description'))
                            ->rows(3)
                            ->autosize()
                            ->columnSpanFull(),
                        TextInput::make($tab->makeName('list_title'))
                            ->label('List Title')
                            ->required(),
                        Grid::make('1')
                            ->schema([
                                Repeater::make($tab->makeName('list_items'))
                                    ->label('List')
                                    ->schema([
                                        TextInput::make($tab->makeName('title'))
                                            ->required(),

                                        Textarea::make($tab->makeName('subtitle'))
                                            ->autosize()
                                            ->rows(1),
                                    ])
                                    ->defaultItems(0)
                                    ->collapsible()
                                    ->reorderable()
                                    ->itemLabel(fn(array $state): ?string => $state['title'] ?? null)
                                    ->grid(2),
                            ]),


                    ])->columnSpanFull(),

            ]);
    }
}
