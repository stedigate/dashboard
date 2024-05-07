<?php

namespace App\Filament\Admin\Resources\TicketIssueResource\Pages;

use App\Filament\Admin\Resources\HelpdeskTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTicketIssues extends ListRecords
{
    protected static string $resource = HelpdeskTicketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
