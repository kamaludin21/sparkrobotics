<?php

namespace App\Filament\Resources\CaseStudies\Schemas;


use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Unique;
use Filament\Schemas\Components\Grid;

class CaseStudyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Repeater::make('images')
                    ->label('Showcase Images')
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                FileUpload::make('logo')
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
                                    ->disk('public')
                                    ->directory('case-study/' . now()->format('Y-m'))
                                    ->imagePreviewHeight('150')
                                    ->downloadable()
                                    ->openable()
                                    ->maxSize(500)
                                    ->nullable(),
                                TextInput::make('caption_id')
                                    ->label('Caption ID')
                                    ->required()
                                    ->maxLength(150)
                                    ->columnSpan(1),
                                TextInput::make('caption_en')
                                    ->label('Caption ENG')
                                    ->required()
                                    ->maxLength(150)
                                    ->columnSpan(1),

                            ]),
                    ])
                    ->afterStateHydrated(function (Repeater $component, ?array $state) {
                        $component->state($state ?? []);
                    })
                    ->dehydrateStateUsing(fn($state) => $state ?? [])
                    ->collapsible()
                    ->itemLabel('Gambar')
                    ->addActionLabel('Tambah Gambar')
                    ->grid(2)
                    ->columnSpanFull(),
                TranslatableTabs::make()
                    ->localeTabSchema(fn(TranslatableTab $tab) => [
                        Textarea::make($tab->makeName('title'))
                            ->autosize()
                            ->label('Title')
                            ->maxLength(250)
                            ->rows(1)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set($tab->makeName('slug'), Str::slug($state)))
                            ->required(),
                        TextInput::make($tab->makeName('slug'))
                            ->label('Slug')
                            ->placeholder('Slug')
                            ->unique(
                                table: 'case_study_translations',
                                column: 'slug',
                                modifyRuleUsing: function (Unique $rule, ?Model $record) use ($tab) {
                                    // Ekstrak locale dari hasil makeName.
                                    // explode('.', 'id.slug')[0] akan menghasilkan 'id'
                                    $locale = explode('.', $tab->makeName('slug'))[0];

                                    // 1. Batasi pengecekan unique hanya pada locale yang sedang aktif
                                    $rule->where('locale', $locale);
                                    // 2. Jika sedang mode Edit (record ada), abaikan data translasi milik Kategori ini
                                    if ($record) {
                                        $rule->ignore($record->id, 'case_study_id');
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
