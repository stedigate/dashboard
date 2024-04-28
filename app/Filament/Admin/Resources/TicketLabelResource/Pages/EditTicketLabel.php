<?php

namespace App\Filament\Admin\Resources\TicketLabelResource\Pages;

use App\Filament\Admin\Resources\TicketLabelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketLabel extends EditRecord
{
    protected static string $resource = TicketLabelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
