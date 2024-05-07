<?php

namespace App\Filament\Company\Resources\HelpdeskTicketResource\Pages;

use App\Filament\Company\Resources\HelpdeskTicketResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateHelpdeskTicket extends CreateRecord
{
    protected static string $resource = HelpdeskTicketResource::class;
    protected static null|string $title = '';
}
