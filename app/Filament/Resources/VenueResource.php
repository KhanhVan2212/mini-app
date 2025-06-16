<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VenueResource\Pages;
use App\Filament\Resources\VenueResource\RelationManagers;
use App\Models\Venue;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VenueResource extends Resource
{
    protected static ?string $model = Venue::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    
    protected static ?string $navigationLabel = 'Location';
    
    protected static ?string $modelLabel = 'Location';
    
    protected static ?string $pluralModelLabel = 'Location';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin Location')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên Location')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Nhập tên Location...'),
                            
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('city')
                                    ->label('Thành phố')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Nhập tên thành phố...'),
                                    
                                Forms\Components\TextInput::make('country')
                                    ->label('Quốc gia')
                                    ->required()
                                    ->maxLength(255)
                                    ->placeholder('Nhập tên quốc gia...'),
                            ]),
                            
                        Forms\Components\TextInput::make('postal_code')
                            ->label('Mã bưu chính')
                            ->maxLength(20)
                            ->placeholder('Nhập mã bưu chính...'),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên Location')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),
                    
                Tables\Columns\TextColumn::make('city')
                    ->label('Thành phố')
                    ->searchable()
                    ->sortable()
                    ->icon('heroicon-m-building-office-2'),
                    
                Tables\Columns\TextColumn::make('country')
                    ->label('Quốc gia')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->icon('heroicon-m-flag'),
                    
                Tables\Columns\TextColumn::make('postal_code')
                    ->label('Mã bưu chính')
                    ->searchable()
                    ->placeholder('—'),
                    
                Tables\Columns\TextColumn::make('conferences_count')
                    ->label('Số hội nghị')
                    ->counts('conferences')
                    ->badge()
                    ->color('success')
                    ->icon('heroicon-m-calendar-days'),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                    
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Cập nhật cuối')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('country')
                    ->label('Quốc gia')
                    ->options(function () {
                        return Venue::distinct()
                            ->pluck('country', 'country')
                            ->filter()
                            ->sort();
                    })
                    ->searchable(),
                    
                Tables\Filters\SelectFilter::make('city')
                    ->label('Thành phố')
                    ->options(function () {
                        return Venue::distinct()
                            ->pluck('city', 'city')
                            ->filter()
                            ->sort();
                    })
                    ->searchable(),
            ])
           ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\ViewAction::make()
                        ->label('Xem'),
                    Tables\Actions\EditAction::make()
                        ->label('Sửa'),
                    Tables\Actions\DeleteAction::make()
                        ->label('Xóa'),
                ])
                ->icon('heroicon-m-ellipsis-vertical')
                
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->label('Xóa đã chọn'),
                ]),
            ])


            ->striped()
            ->paginated([10, 25, 50, 100]);
    }


    public static function getPages(): array  
    {
        return [
            'index' => Pages\ListVenues::route('/'),
            'create' => Pages\CreateVenue::route('/create'),
            'edit' => Pages\EditVenue::route('/{record}/edit'),
        ];
    }
    
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
}