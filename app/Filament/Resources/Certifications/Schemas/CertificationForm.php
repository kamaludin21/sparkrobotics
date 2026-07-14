<?php

namespace App\Filament\Resources\Certifications\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CertificationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Logo')
                    ->image()
                    ->optimize('webp')
                    ->disk('public')
                    ->imageEditor()
                    ->maxSize(500)
                    ->directory('certification')
                    ->columnSpanFull(),
                Textarea::make('title')
                    ->autosize()
                    ->rows(1)
                    ->label('Judul')
                    ->maxLength(255)
                    ->hint("Maksimal karakter 255")
                    ->required(),
                Textarea::make('subtitle')
                    ->autosize()
                    ->rows(1)
                    ->label('Sub Judul')
                    ->maxLength(500)
                    ->hint("Maksimal karakter 500")
                    ->required(),

            ]);
    }
}
