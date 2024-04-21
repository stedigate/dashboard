<?php

namespace App\Filament\Admin\Resources;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use App\Models\Wallet;
use Awcodes\FilamentBadgeableColumn\Components\Badge;
use Awcodes\FilamentBadgeableColumn\Components\BadgeableColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class WalletResource extends Resource
{
    protected static ?string $model = Wallet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('company_id')
                    ->relationship('company.owner', 'email')
                    ->searchable()
                    ->preload()
                    ->required(),
                Forms\Components\Textarea::make('private_key')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('public_key')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address_base58')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('status')
                    ->options(WalletStatusEnum::getAllCases())
                    ->required(),
                Forms\Components\Select::make('type')
                    ->options(WalletTypeEnum::getAllCases())
                    ->required(),
                Forms\Components\Select::make('blockchain')
                    ->options(BlockchainEnum::getAllCases())
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('company.name')->searchable(),
                Tables\Columns\TextColumn::make('address_base58')
                    ->searchable()
                    ->url(
                        fn(Wallet $record) => $record->blockchain->explorerAddressUrl($record->address_base58),
                        true
                    )
                    ->limit(15),
                Tables\Columns\TextColumn::make('balance')
                    ->currency('USD')
                    ->sortable(),
                BadgeableColumn::make('type')
                    ->html(false)
                    ->label('Type')
                    ->color(fn(Wallet $record) => $record->type->badgeColor())
                    ->suffixBadges([
                        Badge::make('status')
                            ->label(fn(Wallet $record) => $record->status->label())
                            ->color(fn(Wallet $record) => $record->status->badgeColor()),
                    ]),
                BadgeableColumn::make('blockchain')
                    ->html(false)
                    ->label('Network')
                    ->icon(fn(Wallet $record) => url($record->blockchain->logo()))
                    ->color(fn(Wallet $record) => $record->blockchain->badgeColor()),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options(WalletStatusEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('type')->options(WalletTypeEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('blockchain')->options(BlockchainEnum::getAllCases()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            WalletResource\RelationManagers\TransactionsRelationManager::class,
            WalletResource\RelationManagers\PayoutsRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => WalletResource\Pages\ListWallets::route('/'),
            'create' => WalletResource\Pages\CreateWallet::route('/create'),
            'edit' => WalletResource\Pages\EditWallet::route('/{record}/edit'),
            'view' => WalletResource\Pages\ViewWallet::route('/{record}'),
        ];
    }
}
