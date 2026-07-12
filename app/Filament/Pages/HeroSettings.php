<?php

namespace App\Filament\Pages;

use App\Settings\Hero;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Str;

class HeroSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = Hero::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->icon('heroicon-m-sparkles')
                    ->collapsible()
                    ->schema([
                        TextInput::make('company_name')
                            ->label('Nama Perusahaan')
                            ->required()
                            ->maxLength(100),
                        Tabs::make('Bahasa')
                            ->tabs([
                                Tabs\Tab::make('Indonesia')
                                    ->schema([
                                        TextInput::make('designation_id')
                                            ->label('Jabatan (ID)')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('tagline_id')
                                            ->label('Judul (ID)')
                                            ->required()
                                            ->maxLength(100),
                                    ]),
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('designation_en')
                                            ->label('Designation (EN)')
                                            ->required()
                                            ->maxLength(255),
                                        TextInput::make('tagline_en')
                                            ->label('Headline (EN)')
                                            ->required()
                                            ->maxLength(100),
                                    ]),
                            ])
                            ->columnSpanFull(),
                        FileUpload::make('image')
                            ->label('Gambar (PNG,JPG,WEBP)')
                            ->image()
                            ->disk('public')
                            ->acceptedFileTypes([
                                'image/jpg',
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->optimize('webp')
                            ->helperText('Max Size: 500KB')
                            ->directory('hero')
                            ->imagePreviewHeight('150')
                            ->downloadable()
                            ->maxSize(500)
                            ->nullable(),
                    ]),
                Repeater::make('slides')
                    ->hint('Maksimal 5 slide')
                    ->label('Slideshow')
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('title')
                                    ->label('Title')
                                    ->required()
                                    ->maxLength(150)
                                    ->columnSpan(1),
                                TextInput::make('subtitle')
                                    ->label('Subtitle')
                                    ->required()
                                    ->maxLength(150)
                                    ->columnSpan(1),
                                FileUpload::make('image')
                                    ->label('Gambar (PNG,JPG,WEBP)')
                                    ->image()
                                    ->disk('public')
                                    ->acceptedFileTypes([
                                        'image/jpg',
                                        'image/jpeg',
                                        'image/png',
                                        'image/webp',
                                    ])
                                    ->optimize('webp')
                                    ->helperText('Max Size: 500KB')
                                    ->directory('hero/slides/' . now()->format('Y-m'))
                                    ->imagePreviewHeight('150')
                                    ->downloadable()
                                    ->maxSize(500)
                                    ->nullable(),
                                Toggle::make('is_visible')
                                    ->label('Tampilkan Slide')
                                    ->default(false)
                                    ->columnSpan(1),
                            ]),
                    ])
                    ->minItems(0)
                    ->maxItems(5)
                    ->afterStateHydrated(function (Repeater $component, ?array $state) {
                        $newState = [];
                        if (is_array($state)) {
                            foreach ($state as $item) {
                                $newState[(string) Str::uuid()] = $item;
                            }
                        }
                        $component->state($newState);
                    })
                    ->dehydrateStateUsing(fn(?array $state) => array_values($state ?? []))
                    ->reorderable(true)
                    ->collapsible()
                    ->itemLabel(
                        fn(array $state): ?string =>
                        $state['title'] ?? 'Slide Baru'
                    )
                    ->addActionLabel('Tambah Slide')
                    ->grid(2)
                    ->columnSpanFull()
            ]);
    }
}
