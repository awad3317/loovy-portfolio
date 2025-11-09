<?php

namespace App\Filament\Resources\Brands\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->label('اسم العلامة التجارية')
                    ->maxLength(255)
                    ->required()
                    ->unique(ignoreRecord: true),
                TextInput::make('title')
                    ->label('عنوان العلامة التجارية')
                    ->maxLength(255)
                    ->required(),
                Textarea::make('description')
                    ->label('وصف العلامة التجارية')
                    ->default(null)
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}