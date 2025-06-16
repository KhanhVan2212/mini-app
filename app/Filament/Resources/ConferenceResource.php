<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConferenceResource\Pages;
use App\Filament\Resources\ConferenceResource\RelationManagers;
use App\Models\Conference;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConferenceResource extends Resource
{
    protected static ?string $model = Conference::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Thông tin cơ bản')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Tên hội nghị')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                        
                        Forms\Components\Textarea::make('description')
                            ->label('Mô tả')
                            ->required()
                            ->maxLength(65535)
                            ->rows(4)
                            ->columnSpanFull(),
                        
                        Forms\Components\Select::make('venue_id')
                            ->label('Địa điểm')
                            ->relationship('venue', 'name')
                            ->required()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tên địa điểm')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('address')
                                    ->label('Địa chỉ')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('city')
                                    ->label('Thành phố')
                                    ->maxLength(100),
                                Forms\Components\TextInput::make('capacity')
                                    ->label('Sức chứa')
                                    ->numeric()
                                    ->minValue(1),
                            ]),
                        
                        Forms\Components\TextInput::make('region')
                            ->label('Khu vực')
                            ->maxLength(255),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Thời gian')
                    ->schema([
                        Forms\Components\DateTimePicker::make('start_date')
                            ->label('Ngày bắt đầu')
                            ->required()
                            ->seconds(false)
                            ->native(false),
                        
                        Forms\Components\DateTimePicker::make('end_date')
                            ->label('Ngày kết thúc')
                            ->required()
                            ->seconds(false)
                            ->native(false)
                            ->after('start_date'),
                    ])
                    ->columns(2),
                
                Forms\Components\Section::make('Trạng thái')
                    ->schema([
                        Forms\Components\Select::make('status')
                            ->label('Trạng thái')
                            ->options([
                                'draft' => 'Bản nháp',
                                'active' => 'Hoạt động',
                                'cancelled' => 'Đã hủy',
                                'completed' => 'Đã hoàn thành',
                            ])
                            ->default('draft')
                            ->required(),
                    ]),
                
                Forms\Components\Section::make('Quan hệ')
                    ->schema([
                        Forms\Components\Select::make('speakers')
                            ->label('Diễn giả')
                            ->relationship('speakers', 'name')
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('name')
                                    ->label('Tên diễn giả')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('title')
                                    ->label('Chức danh')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('company')
                                    ->label('Công ty')
                                    ->maxLength(255),
                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('bio')
                                    ->label('Tiểu sử')
                                    ->rows(3),
                            ]),
                        
                        Forms\Components\Select::make('talks')
                            ->label('Bài thuyết trình')
                            ->relationship('talks', 'title')
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->createOptionForm([
                                Forms\Components\TextInput::make('title')
                                    ->label('Tiêu đề')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('abstract')
                                    ->label('Tóm tắt')
                                    ->rows(3),
                                Forms\Components\TimePicker::make('duration')
                                    ->label('Thời lượng')
                                    ->seconds(false),
                                Forms\Components\Select::make('type')
                                    ->label('Loại')
                                    ->options([
                                        'keynote' => 'Bài phát biểu chính',
                                        'presentation' => 'Thuyết trình',
                                        'workshop' => 'Workshop',
                                        'panel' => 'Thảo luận',
                                    ]),
                            ]),
                    ])
                    ->columns(2)
                    ->collapsible(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('name')
                    ->label('Tên hội nghị')
                    ->sortable()
                    ->searchable()
                    ->limit(50),
                
                Tables\Columns\TextColumn::make('description')
                    ->label('Mô tả')
                    ->limit(100)
                    ->tooltip(function (Conference $record): ?string {
                        return $record->description;
                    }),
                
                Tables\Columns\TextColumn::make('start_date')
                    ->label('Ngày bắt đầu')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('end_date')
                    ->label('Ngày kết thúc')
                    ->dateTime('d/m/Y H:i')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('venue.name')
                    ->label('Địa điểm')
                    ->sortable()
                    ->searchable(),
                
                Tables\Columns\TextColumn::make('speakers_count')
                    ->label('Số diễn giả')
                    ->counts('speakers')
                    ->sortable(),
                
                Tables\Columns\TextColumn::make('talks_count')
                    ->label('Số bài thuyết trình')
                    ->counts('talks')
                    ->sortable(),
                
                Tables\Columns\BadgeColumn::make('status')
                    ->label('Trạng thái')
                    ->getStateUsing(function (Conference $record): string {
                        $now = now();
                        if ($record->start_date > $now) {
                            return 'upcoming';
                        } elseif ($record->end_date < $now) {
                            return 'completed';
                        } else {
                            return 'ongoing';
                        }
                    })
                    ->colors([
                        'warning' => 'upcoming',
                        'success' => 'ongoing',
                        'secondary' => 'completed',
                    ])
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'upcoming' => 'Sắp diễn ra',
                        'ongoing' => 'Đang diễn ra',
                        'completed' => 'Đã kết thúc',
                    }),
                
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Ngày tạo')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Ngày cập nhật')
                    ->dateTime('d/m/Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('venue_id')
                    ->label('Địa điểm')
                    ->relationship('venue', 'name')
                    ->searchable()
                    ->preload(),
                
                Tables\Filters\Filter::make('date_range')
                    ->label('Khoảng thời gian')
                    ->form([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Từ ngày'),
                        Forms\Components\DatePicker::make('end_date')
                            ->label('Đến ngày'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['start_date'],
                                fn (Builder $query, $date): Builder => $query->whereDate('start_date', '>=', $date),
                            )
                            ->when(
                                $data['end_date'],
                                fn (Builder $query, $date): Builder => $query->whereDate('end_date', '<=', $date),
                            );
                    }),
                
                Tables\Filters\Filter::make('status')
                    ->label('Trạng thái')
                    ->form([
                        Forms\Components\Select::make('status')
                            ->options([
                                'upcoming' => 'Sắp diễn ra',
                                'ongoing' => 'Đang diễn ra',
                                'completed' => 'Đã kết thúc',
                            ])
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        $now = now();
                        
                        return $query->when($data['status'], function (Builder $query, string $status) use ($now): Builder {
                            return match ($status) {
                                'upcoming' => $query->where('start_date', '>', $now),
                                'ongoing' => $query->where('start_date', '<=', $now)->where('end_date', '>=', $now),
                                'completed' => $query->where('end_date', '<', $now),
                            };
                        });
                    }),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListConferences::route('/'),
            'create' => Pages\CreateConference::route('/create'),
            'edit' => Pages\EditConference::route('/{record}/edit'),
        ];
    }
}