<?php

namespace App\Filament\Admin\Resources\TicketIssueResource\Pages;

use App\Filament\Admin\Resources\TicketIssueResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTicketIssue extends EditRecord
{
    protected static string $resource = TicketIssueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
