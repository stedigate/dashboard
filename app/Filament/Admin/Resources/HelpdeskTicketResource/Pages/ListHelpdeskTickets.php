<?php

namespace App\Filament\Admin\Resources\HelpdeskTicketResource\Pages;

use App\Filament\Admin\Resources\HelpdeskTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHelpdeskTickets extends ListRecords
{
    protected static string $resource = HelpdeskTicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
