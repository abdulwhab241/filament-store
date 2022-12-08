<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Electric;
use Illuminate\Support\Str;
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
use App\Filament\Resources\ElectricResource\Widgets\ElectricStatsOverview;

class ElectricResource extends Resource
{
    protected static ?string $model = Electric::class;

    protected static ?string $navigationIcon = 'heroicon-o-lightning-bolt';
    protected static ?string $navigationGroup = 'Products Management';

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
                    ->required()
                    ->multiple()
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                        return "images/electric/".Str::random(15).".".$file->getClientOriginalExtension();
                    }),
                    Textarea::make('disc'),
                    TextInput::make('price')
                    ->required()
                    ->integer()
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                    TextColumn::make('name')->sortable() -> searchable(),
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

    public static function getWidgets(): array
    {
        return [
            ElectricStatsOverview::class,
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
