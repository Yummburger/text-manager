<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;

class Dashboard extends BaseDashboard
{
    // Customize the dashboard widgets
    public function getWidgets(): array
    {
        return [
            AccountWidget::class,
            // Add more widgets here
        ];
    }

    // Customize the header
    public function getTitle(): string
    {
        return 'Text Manager Dashboard';
    }

    // Optional: Customize the maximum number of columns for widgets
    public function getColumns(): int | array
    {
        return 2;
    }
}
