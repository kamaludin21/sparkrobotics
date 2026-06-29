<?php

namespace App\Filament\Resources\CaseStudies\Pages;

use App\Filament\Resources\CaseStudies\CaseStudyResource;
use Filament\Resources\Pages\CreateRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\CreateTranslatable;

class CreateCaseStudy extends CreateRecord
{
    use CreateTranslatable;
    protected static string $resource = CaseStudyResource::class;
}
