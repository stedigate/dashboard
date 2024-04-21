<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PayoutResource\RelationManagers;
use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\PayoutStatusEnum;
use App\Models\Enums\WalletStatusEnum;
use App\Models\Enums\WalletTypeEnum;
use App\Models\Payout;
use App\Models\Transaction;
use Awcodes\FilamentBadgeableColumn\Components\Badge;
use Awcodes\FilamentBadgeableColumn\Components\BadgeableColumn;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Pelmered\FilamentMoneyField\Tables\Columns\MoneyColumn;

class PayoutResource extends Resource
{
    protected static ?string $model = Payout::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                Tables\Columns\TextColumn::make('company.name')->searchable(),
                Tables\Columns\TextColumn::make('wallet.address_base58')
                    ->searchable()
                    ->url(
                        fn(Payout $record) => $record->wallet->blockchain->explorerAddressUrl($record->wallet->address_base58),
                        true
                    )
                    ->limit(15),
                Tables\Columns\TextColumn::make('trx')
                    ->searchable()
                    ->label('Trx')
                    ->url(
                        fn(Payout $record) => $record->blockchain->explorerTransactionUrl($record->trx),
                        true
                    )
                    ->limit(15),
                Tables\Columns\TextColumn::make('amount')
                    ->currency(fn(Payout $record) => $record->currency->fiatCurrency())
                    ->color('danger')
                    ->prefix('-')
                    ->sortable(),
                BadgeableColumn::make('blockchain')
                    ->html(false)
                    ->label('Network/Currency')
                    ->icon(fn(Payout $record) => url($record->blockchain->logo()))
                    ->color(fn(Payout $record) => $record->blockchain->badgeColor())
                    ->suffixBadges([
                        Badge::make('currency')
                            ->label(fn(Payout $record) => $record->currency->label())
                            ->color(fn(Payout $record) => $record->currency->badgeColor()),
                    ]),
                Tables\Columns\TextColumn::make('status')
                    ->color(fn(Payout $record) => $record->status->badgeColor()),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options(PayoutStatusEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('blockchain')->options(BlockchainEnum::getAllCases()),
                Tables\Filters\SelectFilter::make('currency')->options(CurrencyEnum::getAllCases()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => PayoutResource\Pages\ListPayouts::route('/'),
            'create' => PayoutResource\Pages\CreatePayout::route('/create'),
            'edit' => PayoutResource\Pages\EditPayout::route('/{record}/edit'),
        ];
    }
}
