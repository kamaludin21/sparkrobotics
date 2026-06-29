<?php

namespace App\Filament\Resources\Products\Schemas;

use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Utilities\{Get, Set};
use Illuminate\Support\Str;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('title')
                    ->autosize()
                    ->rows(1)
                    ->label('Nama Produk')
                    ->maxLength(250)
                    ->helperText('Maksimal 250 Karakter')
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->placeholder('Slug')
                    ->unique(ignoreRecord: true)
                    ->disabled()
                    ->dehydrated()
                    ->readOnly()
                    ->required(),
                TranslatableTabs::make()
                    ->appendTabs()
                    ->localeTabSchema(fn(TranslatableTab $tab) => [
                        TextInput::make($tab->makeName('title_section'))
                            ->label('Title Section')
                            ->maxLength(255)
                            ->required(),
                        TextInput::make($tab->makeName('subtitle_section'))
                            ->label('Subtitle Section')
                            ->maxLength(255)
                            ->required(),
                        RichEditor::make($tab->makeName('content'))
                            ->label('Konten/Deskripsi')
                            ->required(),
                    ])
                    ->columnSpanFull(),
                Grid::make(2)
                    ->schema([
                        Select::make('categories')
                            ->relationship(
                                name: 'categories',
                                titleAttribute: 'name',
                                modifyQueryUsing: fn(Builder $query) => $query
                                    ->leftJoin('category_translations', function ($join) {
                                        $join->on('categories.id', '=', 'category_translations.category_id')
                                            ->where('category_translations.locale', App::getLocale());
                                    })
                                    ->select('categories.*', 'category_translations.name')
                                    ->reorder()
                                    ->orderBy('category_translations.name', 'asc')
                            )
                            ->getOptionLabelFromRecordUsing(fn(Model $record) => $record->name ?? 'Tanpa Nama (Belum Diterjemahkan)')
                            ->multiple()
                            ->preload()
                            ->searchable(['category_translations.name']),
                        Select::make('brand_id')
                            ->label('Brand')
                            ->relationship('brand', 'name')
                            ->native(false)
                            ->preload(),
                    ]),

                Grid::make(3)
                    ->schema([
                        Select::make('hero_media_type')
                            ->label('Hero Media Type')
                            ->native(true)
                            ->options([
                                'image' => 'Image',
                                'video' => 'Video',
                            ])
                            ->default('image')
                            ->live()
                            ->required()
                            ->columnSpan(1),

                        FileUpload::make('hero_image_path')
                            ->label('Hero Image')
                            ->image()
                            ->disk('public')
                            ->optimize('webp')
                            ->acceptedFileTypes([
                                'image/jpg',
                                'image/jpeg',
                                'image/png',
                                'image/webp',
                            ])
                            ->directory('products/hero/' . now()->format('Y-m'))
                            ->visible(fn(Get $get) => $get('hero_media_type') === 'image')
                            ->required(fn(Get $get) => $get('hero_media_type') === 'image')
                            ->columnSpan(2),

                        TextInput::make('hero_youtube_url')
                            ->label('YouTube URL')
                            ->url()
                            ->placeholder('https://www.youtube.com/watch?v=...')
                            ->visible(fn(Get $get) => $get('hero_media_type') === 'video')
                            ->required(fn(Get $get) => $get('hero_media_type') === 'video')
                            ->columnSpan(2),
                    ]),

                FileUpload::make('datasheet_file_path')
                    ->label('File Spesifikasi')
                    ->maxSize(20000)
                    ->openable()
                    ->disk('public')
                    ->downloadable()
                    ->directory('products/documents/' . now()->format('Y-m'))
                    ->helperText('Maksimal ukuran: 20MB'),

                FileUpload::make('thumbnail_image')
                    ->label('Thumbnail Product')
                    ->maxSize(500)
                    ->image()
                    ->disk('public')
                    ->acceptedFileTypes([
                        'image/jpg',
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->optimize('webp')
                    ->directory('products/thumbnail/' . now()->format('Y-m'))
                    ->imageEditor()
                    ->openable()
                    ->downloadable()
                    ->helperText('Maks Size: 500KB per gambar')
                    ->required(),

                FileUpload::make('showcase_images')
                    ->label('Showcase Product')
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
                    ->directory('products/showcase_images/' . now()->format('Y-m'))
                    ->imageEditor()
                    ->openable()
                    ->downloadable()
                    ->helperText('Maks Size: 500KB per gambar')
                    ->required(),

                FileUpload::make('features_images')
                    ->label('Feature Image')
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
                    ->directory('products/features_images/' . now()->format('Y-m'))
                    ->imageEditor()
                    ->reorderable()
                    ->openable()
                    ->downloadable()
                    ->helperText('Maks Size: 500KB per gambar')
                    ->required(),

                Grid::make('1')
                    ->schema([
                        Repeater::make('specifications')
                            ->label('Specification Tabs')
                            ->schema([
                                TextInput::make('title')
                                    ->label('Tab Title'),
                                Repeater::make('items')
                                    ->label('Specifications')
                                    ->schema([
                                        TextInput::make('label')
                                            ->label('Label')
                                            ->columnSpan(1),
                                        TextInput::make('value')
                                            ->label('Value')
                                            ->columnSpan(1),
                                    ])
                                    ->defaultItems(0)
                                    ->reorderable()
                                    ->collapsible(),
                            ])
                            ->defaultItems(1)
                            ->grid(2)
                            ->reorderable()
                            ->collapsible()
                    ])->columnSpanFull(),
            ]);
    }
}
