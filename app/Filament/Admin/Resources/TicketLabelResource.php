<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TicketLabelResource\Pages;
use App\Filament\Admin\Resources\TicketLabelResource\RelationManagers;
use Coderflex\LaravelTicket\Models\Label;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TicketLabelResource extends Resource
{
    protected static ?string $model = Label::class;

    protected static ?string $navigationLabel = 'Labels';

    protected static ?string $navigationIcon = 'heroicon-o-tag';
    protected static ?string $activeNavigationIcon = 'heroicon-s-tag';

    protected static ?string $navigationGroup = 'Support';

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
                //
            ])
            ->filters([
                //
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
            'index' => Pages\ListTicketLabels::route('/'),
            'create' => Pages\CreateTicketLabel::route('/create'),
            'edit' => Pages\EditTicketLabel::route('/{record}/edit'),
        ];
    }
}
