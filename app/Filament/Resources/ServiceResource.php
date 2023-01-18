<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-server';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')->reactive()
                    ->afterStateUpdated( function ( \Closure $set, $state ) {
                        $set('slug', Str::slug( $state ));
                    })->required(),
                Forms\Components\TextInput::make('slug')->required(),
                Forms\Components\TextInput::make('subtitle')->required(),
                Forms\Components\Builder::make('description')
                    ->blocks([
                        Forms\Components\Builder\Block::make('content')
                            ->schema([
                                Forms\Components\RichEditor::make('content')->required(),
                            ]),
                    ])->columnSpan([
                        'sm'  => 2,
                        'xl'  => 2,
                        '2xl' => 2,
                    ]),
                Forms\Components\FileUpload::make('image')->directory('service-images')->image()->columnSpan([
                    'sm'  => 2,
                    'xl'  => 2,
                    '2xl' => 2,
                ]),
                Forms\Components\TextInput::make('seo_description')->required(),
                Forms\Components\TextInput::make('seo_keyword')->required(),
                Forms\Components\Hidden::make('created_by')->default( 'root' )->disabled()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtitle')
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
            'index' => Pages\ManageServices::route('/'),
        ];
    }
}
