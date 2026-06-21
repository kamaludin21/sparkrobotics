<?php

namespace App\Filament\Resources\Translations\Pages;

use App\Filament\Resources\Translations\TranslationResource;
use App\Models\Translation;
use Filament\Actions\CreateAction;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Illuminate\Support\Collection;

class Languages extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string $resource = TranslationResource::class;

    protected string $view = 'filament.resources.translations.pages.languages';

    public ?array $data = [];
    public Collection $translations;

    public function mount(): void
    {
        $this->translations = Translation::all();

        $this->form->fill(
            $this->translations
                ->keyBy('id')
                ->map(fn($t) => [
                    'key' => $t->key,
                    'lang_id' => $t->lang_id,
                    'lang_en' => $t->lang_en,
                ])
                ->toArray()
        );
    }

    public function form(Schema $form): Schema
    {
        $groups = Translation::all()->groupBy(function ($translation) {
            return explode('_', $translation->key)[0];
        });

        $sections = [];

        foreach ($groups as $group => $translations) {

            $children = [];

            foreach ($translations as $translation) {
                $children[] = Section::make($translation->key)
                    ->schema([
                        TextInput::make("{$translation->id}.key")
                            ->label('Key')
                            ->disabled(),

                        Textarea::make("{$translation->id}.lang_id")
                            ->label('Indonesian')
                            ->autosize()
                            ->rows(1)
                            ->required(),

                        Textarea::make("{$translation->id}.lang_en")
                            ->label('English')
                            ->autosize()
                            ->rows(1)   
                            ->required(),
                    ])
                    ->columns(3)
                    ->collapsible();
            }

            $sections[] = Section::make(Str::headline($group))
                ->schema($children)
                ->collapsible()
                ->collapsed();
        }

        return $form
            ->schema($sections)
            ->statePath('data');
    }

    public function update(): void
    {
        foreach ($this->data as $id => $item) {

            Translation::find($id)?->update([
                'lang_id' => $item['lang_id'],
                'lang_en' => $item['lang_en'],
            ]);
        }

        Notification::make()
            ->success()
            ->title('Berhasil!')
            ->body('Data terjemahan berhasil diperbarui.')
            ->send();
    }

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
