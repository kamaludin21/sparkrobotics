<?php

namespace App\Filament\Resources\Solutions\Pages;

use App\Filament\Resources\Solutions\SolutionResource;
use Filament\Resources\Pages\CreateRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\CreateTranslatable;

class CreateSolution extends CreateRecord
{
    use CreateTranslatable;
    protected static string $resource = SolutionResource::class;
}
