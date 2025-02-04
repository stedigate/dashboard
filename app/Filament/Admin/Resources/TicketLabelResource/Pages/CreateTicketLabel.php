<?php

namespace App\Filament\Admin\Resources\TicketLabelResource\Pages;

use App\Filament\Admin\Resources\HelpdeskLabelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTicketLabel extends CreateRecord
{
    protected static string $resource = HelpdeskLabelResource::class;
}
