<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactUsResource\Pages;
use App\Filament\Resources\ContactUsResource\RelationManagers;
use App\Models\ContactUs;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactUsResource extends Resource
{
    protected static ?string $model = ContactUs::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mobile_phone')
                    ->tel()
                    ->required()
                    ->maxLength(20),
                Forms\Components\TextInput::make('fax')
                    ->tel()
                    ->maxLength(20),
                Forms\Components\TextInput::make('twitter_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('facebook_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('instagram_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('linkedin_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('youtube_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('tiktok_url')
                    ->url()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->maxLength(500),
                Forms\Components\TextInput::make('websiter_url')
                    ->url()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('email'),
                TextColumn::make('mobile_phone'),
                TextColumn::make('fax'),
                TextColumn::make('twitter_url'),
                TextColumn::make('facebook_url'),
                TextColumn::make('instagram_url'),
                TextColumn::make('linkedin_url'),
                TextColumn::make('youtube_url'),
                TextColumn::make('tiktok_url'),
                TextColumn::make('address'),
                TextColumn::make('websiter_url'),
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
            'index' => Pages\ManageContactUs::route('/'),
        ];
    }
}
