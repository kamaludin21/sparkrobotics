<?php

namespace App\Filament\Resources\Products\Pages;

use App\Filament\Resources\Products\ProductResource;
use Filament\Resources\Pages\CreateRecord;
use Doriiaan\FilamentAstrotomic\Resources\Pages\CreateTranslatable;

class CreateProduct extends CreateRecord
{   
    use CreateTranslatable;
    protected static string $resource = ProductResource::class;
}
