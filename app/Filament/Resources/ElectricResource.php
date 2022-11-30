<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Electric;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ElectricResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ElectricResource\RelationManagers;

class ElectricResource extends Resource
{
    protected static ?string $model = Electric::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form ): Form 
    {
        return $form
            ->schema([
                Card::make()
                ->schema([
                    TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    FileUpload::make('image')
                    ->multiple()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return (string) str($file->getClientOriginalName())->prepend('public/images/electric/');
                    }),
                    Textarea::make('disc'),
                    TextInput::make('price')
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                    TextColumn::make('id') -> sortable(),
                    TextColumn::make('name') -> searchable(),
                    ImageColumn::make('image')->square(),
                    TextColumn::make('disc')->limit(1000000),
                    TextColumn::make('price')->money('YER'),
                    TextColumn::make('created_at')->dateTime()
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListElectrics::route('/'),
            'create' => Pages\CreateElectric::route('/create'),
            'edit' => Pages\EditElectric::route('/{record}/edit'),
        ];
    }    
}
