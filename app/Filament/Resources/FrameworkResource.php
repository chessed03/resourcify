<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FrameworkResource\Pages;
use App\Filament\Resources\FrameworkResource\RelationManagers;
use App\Models\Framework;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FrameworkResource extends Resource
{
    protected static ?string $model = Framework::class;

    protected static ?string $navigationIcon = 'heroicon-o-academic-cap';

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('status', 1);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('description')->required(),
                Forms\Components\BelongsToSelect::make('type_id')->relationship('type', 'name')->required(),
                Forms\Components\BelongsToSelect::make('category_id')->relationship('category', 'name')->required(),
                Forms\Components\FileUpload::make('image_logo')->directory('framework-images')->image(),
                Forms\Components\TextInput::make('created_by')->default( 'root' )->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('type.name'),
                Tables\Columns\TextColumn::make('category.name'),
                Tables\Columns\ImageColumn::make('image_logo')
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
            'index' => Pages\ManageFrameworks::route('/'),
        ];
    }
}
