<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpeakerResource\Pages;
use App\Filament\Resources\SpeakerResource\RelationManagers;
use App\Models\Speaker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SpeakerResource extends Resource
{
    protected static ?string $model = Speaker::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->label('Name'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->label('Email'),
                Forms\Components\Textarea::make('bio')
                    ->maxLength(65535)
                    ->columnSpan(2)
                    ->label('Biography'),
                Forms\Components\TextInput::make('twitter_handle')
                    ->maxLength(255)
                    ->label('Twitter Handle')
                    ->prefix('@'),
                Forms\Components\TextInput::make('company')
                    ->maxLength(255)
                    ->label('Company'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable()
                    ->label('Name'),
                Tables\Columns\TextColumn::make('email')
                    ->searchable()
                    ->sortable()
                    ->label('Email'),
                Tables\Columns\TextColumn::make('bio')
                    ->limit(50)
                    ->tooltip(fn ($record) => $record->bio)
                    ->label('Biography'),
                Tables\Columns\TextColumn::make('twitter_handle')
                    ->searchable()
                    ->sortable()
                    ->label('Twitter Handle')
                    ->formatStateUsing(fn ($state) => $state ? '@' . $state : '-'),
                Tables\Columns\TextColumn::make('company')
                    ->searchable()
                    ->sortable()
                    ->label('Company'),
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
            'index' => Pages\ListSpeakers::route('/'),
            'create' => Pages\CreateSpeaker::route('/create'),
            'edit' => Pages\EditSpeaker::route('/{record}/edit'),
        ];
    }
}