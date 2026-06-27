<?php

namespace App\Filament\Resources\Articles\Schemas;

use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Utilities\{Get, Set};
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Unique;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                FileUpload::make('image')
                    ->label('Thumbnail Article')
                    ->maxSize(500)
                    ->image()
                    ->acceptedFileTypes([
                        'image/jpg',
                        'image/jpeg',
                        'image/png',
                        'image/webp',
                    ])
                    ->optimize('webp')
                    ->directory('articles/images/' . now()->format('Y-m'))
                    ->imageEditor()
                    ->openable()
                    ->downloadable()
                    ->helperText('Maks Size: 500KB')
                    ->required(),
                Grid::make(2)
                    ->schema([
                        Select::make('article_category_id')
                            ->relationship(name: 'category', titleAttribute: 'title')
                            ->native(false)
                            ->columnSpanFull()
                            ->createOptionForm([
                                Textarea::make('title')
                                    ->autosize()
                                    ->rows(1)
                                    ->label('Judul')
                                    ->maxLength(250)
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
                            ])
                            ->required()
                            ->label('Kategori Berita'),
                        Select::make('tags')
                            ->searchable()
                            ->preload()
                            ->label('Topik')
                            ->helperText('Max: 5 Tag')
                            ->multiple()
                            ->maxItems(5)
                            ->relationship(
                                name: 'tags',
                                titleAttribute: 'name',
                            )
                            ->columnSpanFull()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->label('Tag')
                                    ->placeholder('Tag')
                                    ->maxLength(30)
                                    ->helperText('Max: 30 Karakter')
                                    ->live(onBlur: true)
                                    ->unique()
                                    ->afterStateUpdated(fn(Set $set, ?string $state) => $set('slug', Str::slug($state))),
                                TextInput::make('slug')
                                    ->label('Slug')
                                    ->placeholder('Slug')
                                    ->unique(ignoreRecord: true)
                                    ->disabled()
                                    ->dehydrated()
                                    ->readOnly()
                                    ->required(),
                            ]),


                    ]),
                TranslatableTabs::make()
                    ->localeTabSchema(fn(TranslatableTab $tab) => [
                        TextInput::make($tab->makeName('title'))
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set($tab->makeName('slug'), Str::slug($state))),
                        TextInput::make($tab->makeName('slug'))
                            ->label('Slug')
                            ->placeholder('Slug')
                            ->unique(
                                table: 'article_translations',
                                column: 'slug',
                                modifyRuleUsing: function (Unique $rule, ?Model $record) use ($tab) {
                                    // Ekstrak locale dari hasil makeName.
                                    // explode('.', 'id.slug')[0] akan menghasilkan 'id'
                                    $locale = explode('.', $tab->makeName('slug'))[0];

                                    // 1. Batasi pengecekan unique hanya pada locale yang sedang aktif
                                    $rule->where('locale', $locale);
                                    // 2. Jika sedang mode Edit (record ada), abaikan data translasi milik Kategori ini
                                    if ($record) {
                                        $rule->ignore($record->id, 'article_id');
                                    }
                                    return $rule;
                                }
                            )
                            ->disabled()
                            ->dehydrated()
                            ->readOnly(),
                        RichEditor::make($tab->makeName('content'))
                            ->label('Konten')
                            ->maxLength(5000)
                            ->disableToolbarButtons([
                                'codeBlock',
                                'attachFiles',
                                'customBlocks',
                                'mergeTags'
                            ])
                            ->required()
                            ->columnSpanFull(),
                    ])->columnSpanFull()
            ]);
    }
}
