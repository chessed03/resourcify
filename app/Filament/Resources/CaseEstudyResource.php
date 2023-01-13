<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaseEstudyResource\Pages;
use App\Filament\Resources\CaseEstudyResource\RelationManagers;
use App\Models\CaseEstudy;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CaseEstudyResource extends Resource
{
    protected static ?string $model = CaseEstudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('status', 1);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('description')->required(),
                Forms\Components\TextInput::make('challenge')->required(),
                Forms\Components\TextInput::make('solution')->required(),
                Forms\Components\TextInput::make('technology')->required(),
                Forms\Components\TextInput::make('content')->required(),
                Forms\Components\FileUpload::make('image')->directory('case-study-images')->image(),
                Forms\Components\FileUpload::make('images')->multiple()->directory('case-study-images')->image(),
                Forms\Components\TextInput::make('created_by')->default( 'root' )->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
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
            'index' => Pages\ManageCaseEstudies::route('/'),
        ];
    }
}
