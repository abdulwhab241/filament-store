<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Medical;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Livewire\TemporaryUploadedFile;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\MedicalResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MedicalResource\RelationManagers;

class MedicalResource extends Resource
{
    protected static ?string $model = Medical::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Add Products';

    public static function form(Form $form): Form
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
                    return "images/house/".Str::random(15).".".$file->getClientOriginalExtension();
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
                TextColumn::make('name') -> searchable(),
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
            'index' => Pages\ListMedicals::route('/'),
            'create' => Pages\CreateMedical::route('/create'),
            'edit' => Pages\EditMedical::route('/{record}/edit'),
        ];
    }    
}
