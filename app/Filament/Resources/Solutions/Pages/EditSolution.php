<?php

namespace App\Filament\Resources\Solutions\Pages;

use App\Filament\Resources\Solutions\SolutionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\EditTranslatable;

class EditSolution extends EditRecord
{
    use EditTranslatable;
    protected static string $resource = SolutionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
