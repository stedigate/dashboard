<?php

namespace App\Filament\Company\Resources\WalletResource\RelationManagers;

use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\PayoutStatusEnum;
use App\Models\Enums\PayoutTypeEnum;
use App\Models\Enums\TransactionStatusEnum;
use App\Models\Transaction;
use Awcodes\FilamentBadgeableColumn\Components\Badge;
use Awcodes\FilamentBadgeableColumn\Components\BadgeableColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class TransactionsRelationManager extends RelationManager
{
    protected static string $relationship = 'transactions';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('trx')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('trx')
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('wallet.address_base58')
                    ->searchable()
                    ->url(
                        fn(Transaction $record) => $record->wallet->blockchain->explorerAddressUrl($record->wallet->address_base58),
                        true
                    )
                    ->limit(5),
                Tables\Columns\TextColumn::make('trx')
                    ->searchable()
                    ->label('Trx')
                    ->url(
                        fn(Transaction $record) => $record->blockchain->explorerTransactionUrl($record->trx),
                        true
                    )
                    ->limit(15),
                Tables\Columns\TextColumn::make('amount')
                    ->currency(fn(Transaction $record) => $record->currency->fiatCurrency())
                    ->color('success')
                    ->prefix('+')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->color(fn(Transaction $record) => $record->status->badgeColor()),
                BadgeableColumn::make('blockchain')
                    ->html(false)
                    ->label('Network/Currency')
                    ->icon(fn(Transaction $record) => url($record->blockchain->logo()))
                    ->color(fn(Transaction $record) => $record->blockchain->badgeColor())
                    ->suffixBadges([
                        Badge::make('currency')
                            ->label(fn(Transaction $record) => $record->currency->label())
                            ->color(fn(Transaction $record) => $record->currency->badgeColor()),
                    ]),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options(TransactionStatusEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('blockchain')->options(BlockchainEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('currency')->options(CurrencyEnum::getAllCases()),
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
