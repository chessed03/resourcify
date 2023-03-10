<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CarouselImageResource\Pages;
use App\Models\CarouselImage;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CarouselImageResource extends Resource
{
    protected static ?string $model = CarouselImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photograph';

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('status', 1);
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->reactive()
                    ->afterStateUpdated( function ( \Closure $set, $state ) {
                        $set('slug', Str::slug( $state ));
                    })->required(),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\Textarea::make('description')->columnSpan([
                    'sm'  => 2,
                    'xl'  => 2,
                    '2xl' => 2,
                ])->required(),
                Forms\Components\FileUpload::make('image')->columnSpan([
                    'sm'  => 2,
                    'xl'  => 2,
                    '2xl' => 2,
                ])->directory('carousel-images')->image(),
                Forms\Components\Hidden::make('created_by')->default( 'root' )->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
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
