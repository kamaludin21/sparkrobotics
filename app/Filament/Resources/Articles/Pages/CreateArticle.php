<?php

namespace App\Filament\Resources\Articles\Pages;

use App\Filament\Resources\Articles\ArticleResource;
use Filament\Resources\Pages\CreateRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\CreateTranslatable;

class CreateArticle extends CreateRecord
{
    use CreateTranslatable;
    protected static string $resource = ArticleResource::class;
}
