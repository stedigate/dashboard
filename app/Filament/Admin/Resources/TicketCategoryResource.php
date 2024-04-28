<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TicketCategoryResource\Pages;
use App\Filament\Admin\Resources\TicketCategoryResource\RelationManagers;
use App\Models\Enums\BlockchainEnum;
use App\Models\Enums\CurrencyEnum;
use App\Models\Enums\TransactionStatusEnum;
use App\Models\Transaction;
use Awcodes\FilamentBadgeableColumn\Components\Badge;
use Awcodes\FilamentBadgeableColumn\Components\BadgeableColumn;
use Coderflex\LaravelTicket\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class TicketCategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationLabel = 'Categories';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $activeNavigationIcon = 'heroicon-s-rectangle-stack';

    protected static ?string $navigationGroup = 'Support';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->live()
                    ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                TextInput::make('slug')
                    ->required()
                    ->unique(Category::class, 'slug', fn ($record) => $record),
                Toggle::make('is_visible')
                    ->label('Visible')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('slug')->searchable(),
                Tables\Columns\ToggleColumn::make('is_visible'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options(TransactionStatusEnum::getAllCases()),
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
                ExportBulkAction::make()
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
            'index' => Pages\ListTicketCategories::route('/'),
            'create' => Pages\CreateTicketCategory::route('/create'),
            'edit' => Pages\EditTicketCategory::route('/{record}/edit'),
        ];
    }
}
