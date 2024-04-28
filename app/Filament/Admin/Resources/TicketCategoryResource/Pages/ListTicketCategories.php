<?php

namespace App\Filament\Admin\Resources\TicketCategoryResource\Pages;

use App\Filament\Admin\Resources\TicketCategoryResource;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use Filament\Actions;
use Filament\Forms\Form;
use Filament\Resources\Pages\ListRecords;

class ListTicketCategories extends ListRecords
{
    protected static string $resource = TicketCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
