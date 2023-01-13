<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarouselImageResource\Pages;
use App\Filament\Resources\CarouselImageResource\RelationManagers;
use App\Models\CarouselImage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CarouselImageResource extends Resource
{
    protected static ?string $model = CarouselImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('status', 1);
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\FileUpload::make('image')->directory('carousel-images')->image(),
                    Forms\Components\TextInput::make('created_by')->default( 'root' )->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageCarouselImages::route('/'),
        ];
    }
}
