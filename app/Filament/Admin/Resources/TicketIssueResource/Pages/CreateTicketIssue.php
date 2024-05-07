<?php

namespace App\Filament\Admin\Resources\TicketIssueResource\Pages;

use App\Filament\Admin\Resources\HelpdeskTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketIssue extends CreateRecord
{
    protected static string $resource = HelpdeskTicketResource::class;
}
