<?php

namespace App\Filament\Admin\Resources\TicketLabelResource\Pages;

use App\Filament\Admin\Resources\HelpdeskLabelResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketLabels extends ListRecords
{
    protected static string $resource = HelpdeskLabelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
