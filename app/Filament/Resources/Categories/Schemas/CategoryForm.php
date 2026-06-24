<?php

namespace App\Filament\Resources\Categories\Schemas;

use Doriiaan\FilamentAstrotomic\Schemas\Components\TranslatableTabs;
use Doriiaan\FilamentAstrotomic\TranslatableTab;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Validation\Rules\Unique;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TranslatableTabs::make()
                    ->localeTabSchema(fn(TranslatableTab $tab) => [
                        Textarea::make($tab->makeName('name'))
                            ->autosize()
                            ->label('Kategori Artikel')
                            ->maxLength(250)
                            ->rows(1)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn(Set $set, ?string $state) => $set($tab->makeName('slug'), Str::slug($state)))
                            ->required(),

                        TextInput::make($tab->makeName('slug'))
                            ->label('Slug')
                            ->placeholder('Slug')
                            ->unique(
                                table: 'category_translations',
                                column: 'slug',
                                modifyRuleUsing: function (Unique $rule, ?Model $record) use ($tab) {
                                    // Ekstrak locale dari hasil makeName.
                                    // explode('.', 'id.slug')[0] akan menghasilkan 'id'
                                    $locale = explode('.', $tab->makeName('slug'))[0];

                                    // 1. Batasi pengecekan unique hanya pada locale yang sedang aktif
                                    $rule->where('locale', $locale);
                                    // 2. Jika sedang mode Edit (record ada), abaikan data translasi milik Kategori ini
                                    if ($record) {
                                        $rule->whereNot('category_id', $record->id);
                                    }
                                    return $rule;
                                }
                            )
                            ->disabled()
                            ->dehydrated()
                            ->readOnly(),
                    ])
            ]);
    }
}
