<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutUsResource\Pages;
use App\Filament\Resources\AboutUsResource\RelationManagers;
use App\Models\AboutUs;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class AboutUsResource extends Resource
{
    protected static ?string $model = AboutUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('company_picture')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
                FileUpload::make('logo')
                    ->image()
                    ->imageEditor(),
                FileUpload::make('favicon')
                    ->image()
                    ->imageEditor(),
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('since')
                    ->maxLength(255),
                TextArea::make('vision')
                    ->maxLength(255),
                TextArea::make('mission')
                    ->maxLength(255),
                TextInput::make('featured')
                    ->maxLength(255),
                Textarea::make('description')
                    ->maxLength(255)
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('company_picture'),
                ImageColumn::make('logo'),
                ImageColumn::make('favicon'),
                TextColumn::make('name'),
                TextColumn::make('since'),
                TextColumn::make('vision'),
                TextColumn::make('mission'),
                TextColumn::make('featured'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageAboutUs::route('/'),
        ];
    }
}
