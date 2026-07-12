<?php

namespace App\Filament\Pages;

use App\Settings\Company;
use BackedEnum, UnitEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Tabs;
use Illuminate\Support\Str;

class CompanySettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static string $settings = Company::class;
    protected static string | UnitEnum | null $navigationGroup = 'Settings';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Hero Section')
                    ->icon('heroicon-m-sparkles')
                    ->collapsible()
                    ->schema([
                        Tabs::make('Bahasa')
                            ->tabs([
                                Tabs\Tab::make('Indonesia')
                                    ->schema([
                                        TextInput::make('tagline_id')
                                            ->label('Judul (ID)')
                                            ->required()
                                            ->maxLength(100),
                                        TextInput::make('company_name_id')
                                            ->label('Nama Perusahaan (ID)')
                                            ->required()
                                            ->maxLength(200),
                                        TextInput::make('designation_id')
                                            ->label('Jabatan (ID)')
                                            ->required()
                                            ->maxLength(200),
                                        Textarea::make('description_id')
                                            ->label('Deskripsi Singkat (ID)')
                                            ->rows(1)
                                            ->autosize()
                                            ->maxLength(500),
                                    ]),
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('tagline_en')
                                            ->label('Headline (EN)')
                                            ->required()
                                            ->maxLength(100),
                                        TextInput::make('company_name_en')
                                            ->label('Company Name (EN)')
                                            ->required()
                                            ->maxLength(200),
                                        TextInput::make('designation_en')
                                            ->label('Designation (EN)')
                                            ->required()
                                            ->maxLength(200),
                                        Textarea::make('description_en')
                                            ->label('Short Description (EN)')
                                            ->rows(1)
                                            ->autosize()
                                            ->maxLength(500),
                                    ]),
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Siapa Kami?')
                    ->icon('heroicon-m-user-group')
                    ->collapsible()
                    ->schema([
                        FileUpload::make('about_image')
                            ->label('Foto Perusahaan')
                            ->image()
                            ->multiple()
                            ->optimize('webp')
                            ->disk('public')
                            ->imageEditor()
                            ->maxSize(500)
                            ->directory('settings/about/company')
                            ->columnSpanFull(),
                        Tabs::make('Bahasa')
                            ->tabs([
                                Tabs\Tab::make('Indonesia')
                                    ->schema([
                                        TextInput::make('section_title_id')
                                            ->label('Judul Section (ID)')
                                            ->required()
                                            ->maxLength(100),
                                        RichEditor::make('about_id')
                                            ->label('Deskripsi (ID)')
                                            ->required()
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'bulletList',
                                                'orderedList',
                                                'link',
                                            ]),
                                    ]),
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('section_title_en')
                                            ->label('Section Title (EN)')
                                            ->required()
                                            ->maxLength(100),
                                        RichEditor::make('about_en')
                                            ->label('Description (EN)')
                                            ->toolbarButtons([
                                                'bold',
                                                'italic',
                                                'underline',
                                                'bulletList',
                                                'orderedList',
                                                'link',
                                            ]),
                                    ]),
                            ])
                            ->columnSpanFull(),
                    ]),

                Section::make('Industri yang Kami Dukung')
                    ->icon('heroicon-m-wrench-screwdriver')
                    ->collapsible()
                    ->schema([
                        Tabs::make('Bahasa Judul')
                            ->tabs([
                                Tabs\Tab::make('Indonesia')
                                    ->schema([
                                        TextInput::make('industries_title_id')
                                            ->label('Judul Section (ID)')
                                            ->required()
                                            ->maxLength(100),
                                        Textarea::make('industries_subtitle_id')
                                            ->label('Sub Judul Section (ID)')
                                            ->rows(1)
                                            ->autosize()
                                            ->maxLength(500),
                                    ]),
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('industries_title_en')
                                            ->label('Judul Section (EN)')
                                            ->required()
                                            ->maxLength(100),
                                        Textarea::make('industries_subtitle_en')
                                            ->label('Sub Judul Section (EN)')
                                            ->rows(1)
                                            ->autosize()
                                            ->maxLength(500),
                                    ]),
                            ])
                            ->columnSpanFull(),

                        $this->industriesRepeater(),
                    ]),

                Section::make('Dipercaya Oleh')
                    ->icon('heroicon-m-shield-check')
                    ->collapsible()
                    ->schema([
                        Tabs::make('Bahasa Judul')
                            ->tabs([
                                Tabs\Tab::make('Indonesia')
                                    ->schema([
                                        TextInput::make('brand_title_id')
                                            ->label('Judul Section (ID)')
                                            ->required()
                                            ->maxLength(100),
                                        Textarea::make('brand_subtitle_id')
                                            ->label('Sub Judul Section (ID)')
                                            ->rows(1)
                                            ->autosize()
                                            ->maxLength(500),
                                    ]),
                                Tabs\Tab::make('English')
                                    ->schema([
                                        TextInput::make('brand_title_en')
                                            ->label('Section Title (EN)')
                                            ->required()
                                            ->maxLength(100),
                                        Textarea::make('brand_subtitle_en')
                                            ->label('Sub Judul Section (EN)')
                                            ->rows(1)
                                            ->autosize()
                                            ->maxLength(500),
                                    ]),
                            ])
                            ->columnSpanFull(),
                        $this->clientsRepeater(),
                    ]),
            ]);
    }

    private function industriesRepeater(): Repeater
    {
        return Repeater::make('industries')
            ->label('Daftar Industri')
            ->schema([
                Tabs::make('Bahasa Industri')
                    ->tabs([
                        Tabs\Tab::make('Indonesia')
                            ->schema([
                                TextInput::make('industries_name_id')
                                    ->label('Nama Industri (ID)')
                                    ->required()
                                    ->maxLength(100),
                            ]),
                        Tabs\Tab::make('English')
                            ->schema([
                                TextInput::make('industries_name_en')
                                    ->label('Industry Name (EN)')
                                    ->required()
                                    ->maxLength(100),
                            ]),
                    ]),
            ])
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
                $state['name_id'] ?? 'Nama Industri'
            )
            ->addActionLabel('Tambah Industri')
            ->columnSpanFull();
    }

    private function clientsRepeater(): Repeater
    {
        return Repeater::make('clients')
            ->label('Client Images')
            ->schema([
                Grid::make(1)
                    ->schema([
                        TextInput::make('company_name')
                            ->label('Nama Perusahaan')
                            ->required()
                            ->maxLength(150)
                            ->live(onBlur: true)
                            ->columnSpan(1),
                        FileUpload::make('logo')
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
                            ->directory('settings/company/client_image')
                            ->imagePreviewHeight('150')
                            ->downloadable()
                            ->maxSize(500)
                            ->nullable(),
                    ]),
            ])
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
                $state['company_name'] ?? 'Klien Baru'
            )
            ->addActionLabel('Tambah Klien')
            ->grid(2)
            ->columnSpanFull();
    }
}
