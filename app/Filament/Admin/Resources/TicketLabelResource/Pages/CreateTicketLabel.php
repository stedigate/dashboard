<?php

namespace App\Filament\Admin\Resources\TicketLabelResource\Pages;

use App\Filament\Admin\Resources\TicketLabelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketLabel extends CreateRecord
{
    protected static string $resource = TicketLabelResource::class;
}
