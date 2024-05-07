<?php

namespace App\Filament\Company\Resources;

use App\Filament\Company\Resources\HelpdeskTicketResource\Pages;
use App\Filament\Company\Resources\HelpdeskTicketResource\RelationManagers;
use App\Models\Enums\HelpdeskTicketPriorityEnum;
use App\Models\Enums\HelpdeskTicketStatusEnum;
use App\Models\HelpdeskTicket;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HelpdeskTicketResource extends Resource
{
    protected static ?string $model = HelpdeskTicket::class;

    protected static ?string $navigationIcon = 'heroicon-o-lifebuoy';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->columnSpan(2)
                    ->required(),
                Select::make('priority')
                    ->columnSpan(2)
                    ->columns([
                        'sm' => 3,
                        'xl' => 6,
                        '2xl' => 8,
                    ])
                    ->required()
                    ->default(HelpdeskTicketPriorityEnum::LOW->value)
                    ->options(HelpdeskTicketPriorityEnum::getAllCases()),
                MarkdownEditor::make('message')
                    ->columnSpan(2)
                    ->disableToolbarButtons([
                        'attachFiles',
                    ])
                    ->required(),
                FileUpload::make('attachment')
                    ->columnSpan(2)
                    ->multiple()
                    ->openable()
                    ->image()
                    ->disk('s3')
                    ->directory('helpdesk')
                    ->visibility('private')
                    ->moveFiles(),
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
            'index' => Pages\ListHelpdeskTickets::route('/'),
            'create' => Pages\CreateHelpdeskTicket::route('/create'),
            'edit' => Pages\EditHelpdeskTicket::route('/{record}/edit'),
        ];
    }
}
