<?php

namespace App\Filament\Resources\Features\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\FileUpload;



class FeatureForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                       Select::make('brand_id')
                    ->label('العلامة التجارية')
                    ->relationship('brand', 'title')
                    ->required()
                    ->searchable()
                    ->preload(),

                TextInput::make('icon')
                    ->label('اسم المنتج')
                    ->required(),

                ColorPicker::make('color')
                    ->label('لون العنصر')
                    ->required()
                    ->columnSpanFull(),

                TextInput::make('title')
                    ->label('حجم المنتج')
                    ->required(),

                TextInput::make('text')
                    ->label('وزن المنتج')
                    ->required(),

              
            ]);
    }
}