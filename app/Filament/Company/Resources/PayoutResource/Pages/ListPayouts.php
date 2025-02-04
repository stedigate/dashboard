<?php

namespace App\Filament\Company\Resources\PayoutResource\Pages;

use App\Filament\Company\Resources\PayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPayouts extends ListRecords
{
    protected static string $resource = PayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
