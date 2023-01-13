<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CaseStudyResource\Pages;
use App\Filament\Resources\CaseStudyResource\RelationManagers;
use App\Models\CaseStudy;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CaseStudyResource extends Resource
{
    protected static ?string $model = CaseStudy::class;

    protected static ?string $navigationIcon = 'heroicon-o-cube-transparent';

    public static function getEloquentQuery(): Builder
    {
        return static::getModel()::query()->where('status', 1);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->required(),
                Forms\Components\TextInput::make('subtitle')->required(),
                Forms\Components\Textarea::make('challenge')->required(),
                Forms\Components\Textarea::make('solution')->required(),
                Forms\Components\Builder::make('technology')
                    ->blocks([
                        Forms\Components\Builder\Block::make('languages')
                            ->schema([
                                Forms\Components\Select::make('languages')->multiple()->options( fn ($record) => CaseStudy::selectItemsLanguages() ),
                            ]),
                        Forms\Components\Builder\Block::make('frameworks')
                            ->schema([
                                Forms\Components\Select::make('frameworks')->multiple()->options( fn ($record) => CaseStudy::selectItemsFrameworks() ),
                            ]),
                    ]),
                Forms\Components\FileUpload::make('image')->directory('case-study-images')->image(),
                Forms\Components\FileUpload::make('images')->multiple()->directory('case-study-images')->image(),
                Forms\Components\TextInput::make('created_by')->default( 'root' )->disabled(),
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
            'index' => Pages\ManageCaseStudies::route('/'),
        ];
    }
}