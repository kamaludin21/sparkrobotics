<?php

namespace App\Livewire;

use App\Models\Inbox;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class InboxWidget extends TableWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?string $heading = 'New Inbox';
    public function table(Table $table): Table
    {
        return $table
            ->query(fn(): Builder => Inbox::query()->where('status', 'queue'))
            ->columns([
                TextColumn::make('index')
                    ->label('No.')
                    ->rowIndex(),
                TextColumn::make('full_name')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('company')
                    ->label('Perusahaan')
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('email')
                    ->label('Email')
                    ->icon('heroicon-o-envelope'),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'queue'   => 'warning',
                        'process' => 'info',
                        'done'    => 'success',
                        default   => 'gray',
                    })
                    ->formatStateUsing(fn(string $state): string => match ($state) {
                        'queue'   => 'Antrian',
                        'process' => 'Diproses',
                        'done'    => 'Selesai',
                        default   => $state,
                    }),
                TextColumn::make('phone')
                    ->label('Telepon')
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
