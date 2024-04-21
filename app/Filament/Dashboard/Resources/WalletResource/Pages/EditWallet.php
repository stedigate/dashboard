<?php

namespace App\Filament\Dashboard\Resources\WalletResource\Pages;

use App\Filament\Dashboard\Resources\WalletResource;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use Filament\Actions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditWallet extends EditRecord
{
    protected static string $resource = WalletResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options(WalletStatusEnum::getAllCases())
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options(WalletTypeEnum::getAllCases())
                    ->required(),
            ]);
    }
}
