<?php

namespace App\Filament\Widgets;

use App\Models\Author;
use App\Models\Book;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1; // Menampilkan widget ini paling atas

    protected function getStats(): array
    {
        $totalAuthors = Author::count();
        $totalBooks = Book::count();

        return [
            Stat::make('Total Penulis', $totalAuthors)
                ->description('Penulis terdaftar di katalog')
                ->descriptionIcon('heroicon-m-user-group')
                ->chart([4, 7, 5, 8, 10, 12, $totalAuthors])
                ->color('info'),

            Stat::make('Koleksi Buku', $totalBooks)
                ->description('Total inventaris buku')
                ->descriptionIcon('heroicon-m-book-open')
                ->chart([2, 5, 9, 12, 14, 18, $totalBooks])
                ->color('success'),

            Stat::make('Status Sistem', 'Aktif')
                ->description('Database SQLite Terhubung')
                ->descriptionIcon('heroicon-m-circle-stack')
                ->color('warning'),
        ];
    }
}