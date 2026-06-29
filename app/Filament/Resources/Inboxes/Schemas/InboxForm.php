<?php

namespace App\Filament\Resources\Inboxes\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class InboxForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('full_name')
                    ->label('Full Name')
                    ->disabled(), // Tidak bisa diedit

                TextInput::make('company')
                    ->label('Company')
                    ->disabled(),

                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->disabled(),

                TextInput::make('phone')
                    ->label('Phone Number')
                    ->disabled(),

                Textarea::make('message') // Menggunakan Textarea karena pesannya bisa panjang
                    ->label('Message')
                    ->rows(1)
                    ->autosize()
                    ->disabled(),

                Section::make('Admin Area')
                    ->icon('heroicon-m-sparkles')
                    ->collapsible()
                    ->schema([

                        Textarea::make('admin_note')
                            ->label('Admin Note')
                            ->rows(1)
                            ->autosize(),

                        Select::make('status') // Menggunakan Select agar user hanya bisa memilih 3 opsi tersebut
                            ->label('Status')
                            ->options([
                                'queue'   => 'Queue',
                                'process' => 'Process',
                                'done'    => 'Done',
                            ])
                            ->required(),
                    ])->columnSpanFull(),
            ]);
    }
}
