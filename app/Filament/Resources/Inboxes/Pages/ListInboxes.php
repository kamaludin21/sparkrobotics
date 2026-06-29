<?php

namespace App\Filament\Resources\Inboxes\Pages;

use App\Filament\Resources\Inboxes\InboxResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Schemas\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListInboxes extends ListRecords
{
    protected static string $resource = InboxResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make(),
            'queue' => Tab::make()
                ->label('Antrian')
                ->modifyQueryUsing(fn($query) => $query->where('status', 'queue')),
            'process' => Tab::make()
                ->label('Proses')
                ->modifyQueryUsing(fn($query) => $query->where('status', 'process')),
            'done' => Tab::make()
                ->label('Selesai')
                ->modifyQueryUsing(fn($query) => $query->where('status', 'done')),
        ];
    }
}
