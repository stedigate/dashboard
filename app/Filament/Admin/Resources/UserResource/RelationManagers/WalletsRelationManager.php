<?php

namespace App\Filament\Admin\Resources\UserResource\RelationManagers;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\WalletStatusEnum;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class WalletsRelationManager extends RelationManager
{
    protected static string $relationship = 'wallets';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_base58')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('balance')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('trx')
            ->columns([
                Tables\Columns\TextColumn::make('address_base58'),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('blockchain'),
                Tables\Columns\TextColumn::make('balance'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options(WalletStatusEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('blockchain')->options(BlockchainEnum::getAllCases()),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
