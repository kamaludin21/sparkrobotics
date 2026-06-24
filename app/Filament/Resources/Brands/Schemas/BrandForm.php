<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->label('Slug')
                    ->placeholder('Slug')
                    ->unique(ignoreRecord: true)
                    ->disabled()
                    ->dehydrated()
                    ->readOnly()
                    ->required(),
                FileUpload::make('logo_path')
                    ->label('Gambar (PNG,JPG,WEBP)')
                    ->image()
                    ->acceptedFileTypes([
                        'image/jpg',
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->optimize('webp')
                    ->helperText('Max Size: 500KB')
                    ->directory('brands/' . now()->format('Y-m'))
                    ->imagePreviewHeight('150')
                    ->downloadable()
                    ->maxSize(500)
                    ->nullable(),
            ]);
    }
}
