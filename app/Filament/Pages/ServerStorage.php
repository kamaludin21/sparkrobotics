<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class ServerStorage extends Page
{
    protected static string|\BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static string |\UnitEnum | null $navigationGroup = 'Settings';

    protected static ?string $title = 'Server Storage';

    // HAPUS KATA 'static' DI SINI
    protected string $view = 'filament.pages.server-storage';

    protected function getViewData(): array
    {
        $diskPath = '/';

        $totalBytes = disk_total_space($diskPath);
        $freeBytes = disk_free_space($diskPath);
        $usedBytes = $totalBytes - $freeBytes;

        return [
            'total'      => round($totalBytes / 1073741824, 2),
            'terpakai'   => round($usedBytes / 1073741824, 2),
            'tersedia'   => round($freeBytes / 1073741824, 2),
            'persentase' => round(($usedBytes / $totalBytes) * 100, 2),
        ];
    }
}
