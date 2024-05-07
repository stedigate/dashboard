<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\TransactionResource\Pages;
use App\Filament\Company\Resources\TransactionResource\RelationManagers;
use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\TransactionStatusEnum;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use App\Models\Transaction;
use Awcodes\FilamentBadgeableColumn\Components\Badge;
use Awcodes\FilamentBadgeableColumn\Components\BadgeableColumn;
use Filament\Forms\Form;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Pelmered\FilamentMoneyField\Infolists\Components\MoneyEntry;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Infolists;

class TransactionResource extends Resource
{
    protected static ?string $model = Transaction::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
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
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                ExportBulkAction::make()
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }


    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('blockchain'),
                Infolists\Components\TextEntry::make('status'),
                MoneyEntry::make('amount')->currency('USD')->locale('en_US'),
                Infolists\Components\TextEntry::make('wallet.address_base58')->columnSpanFull(),
                Infolists\Components\TextEntry::make('trx')->columnSpanFull(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransactions::route('/'),
            'create' => Pages\CreateTransaction::route('/create'),
            'edit' => Pages\EditTransaction::route('/{record}/edit'),
            'view' => WalletResource\Pages\ViewWallet::route('/{record}'),
        ];
    }
}
