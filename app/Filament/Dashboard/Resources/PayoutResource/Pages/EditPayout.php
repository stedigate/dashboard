<?php

namespace App\Filament\Dashboard\Resources\PayoutResource\Pages;

use App\Filament\Dashboard\Resources\PayoutResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPayout extends EditRecord
{
    protected static string $resource = PayoutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
