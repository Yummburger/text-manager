<?php

namespace App\Filament\Resources\TextResource\Pages;

use App\Filament\Resources\TextResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Pages\Dashboard;

class CreateText extends CreateRecord
{
    protected static string $resource = TextResource::class;

   // protected function getRedirectUrl(): string
   // {
   //     return '/admin/texts';
   // }
}
