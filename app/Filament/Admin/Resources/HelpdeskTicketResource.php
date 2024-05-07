<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\HelpdeskTicketResource\Pages;
use App\Filament\Admin\Resources\HelpdeskTicketResource\RelationManagers;
use App\Models\Enums\HelpdeskTicketPriorityEnum;
use App\Models\Enums\HelpdeskTicketStatusEnum;
use App\Models\HelpdeskTicket;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use mysql_xdevapi\TableSelect;

class HelpdeskTicketResource extends Resource
{

    protected static ?string $model = HelpdeskTicket::class;

    protected static ?string $navigationLabel = 'Tickets';

    protected static ?string $navigationIcon = 'heroicon-o-ticket';
    protected static ?string $activeNavigationIcon = 'heroicon-s-ticket';

    protected static ?string $navigationGroup = 'Support';

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'primary';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->required(),
                Select::make('assigned_to')
                    ->label('Assigned To')
                    ->options(User::all()->pluck('name', 'id'))
                    ->searchable(),
                Select::make('status')
                    ->default(HelpdeskTicketStatusEnum::PENDING->value)
                    ->options(HelpdeskTicketStatusEnum::getAllCases()),
                Radio::make('priority')
                    ->required()
                    ->default(HelpdeskTicketPriorityEnum::LOW->value)
                    ->options(HelpdeskTicketPriorityEnum::getAllCases()),
                MarkdownEditor::make('message')
                    ->required(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHelpdeskTickets::route('/'),
            'create' => Pages\CreateHelpdeskTicket::route('/create'),
            'edit' => Pages\EditHelpdeskTicket::route('/{record}/edit'),
        ];
    }
}
