<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MedicalResource\Pages;
use App\Filament\Resources\MedicalResource\RelationManagers;
use App\Models\Medical;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MedicalResource extends Resource
{
    protected static ?string $model = Medical::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
