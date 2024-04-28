<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TicketIssueResource\Pages;
use App\Filament\Admin\Resources\TicketIssueResource\RelationManagers;
use App\Models\User;
use Coderflex\LaravelTicket\Models\Category;
use Coderflex\LaravelTicket\Models\Ticket;
use Filament\Forms;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class TicketIssueResource extends Resource
{
    protected static ?string $model = Ticket::class;

    protected static ?string $navigationLabel = 'Issues';

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
                Radio::make('priority')
                    ->required()
                    ->default('low')
                    ->options([
                        'low' => 'No Urgent',
                        'middle' => 'Semi Urgent',
                        'high' => 'Urgent'
                    ]),
                Radio::make('status')
                    ->default('open')
                    ->options([
                        'open' => 'Open',
                        'answered' => 'Answered',
                        'closed' => 'Closed',
                    ]),
                Toggle::make('is_resolved')
                    ->label('Resolved')
                    ->default(false),
                Toggle::make('is_locked')
                    ->label('Locked')
                    ->default(false),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTicketIssues::route('/'),
            'create' => Pages\CreateTicketIssue::route('/create'),
            'edit' => Pages\EditTicketIssue::route('/{record}/edit'),
        ];
    }
}
