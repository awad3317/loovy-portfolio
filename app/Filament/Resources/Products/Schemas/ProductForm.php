<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;


class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('brand_id')
                    ->label('العلامة التجارية')
                    ->relationship('brand', 'title')
                    ->required()
                    ->preload(),

                TextInput::make('name')
                    ->label('اسم المنتج')
                    ->required(),
                     FileUpload::make('image')
                    ->label('صورة المنتج')
                    ->image()
                    ->directory('products')
                    ->required(),
                  FileUpload::make('images')
                    ->label('صور المنتج')
                    ->image()
                    ->multiple()
                    ->reorderable()
                    ->appendFiles()
                    ->directory('products')
                    ->required(),
                Textarea::make('description')
                    ->label('وصف المنتج')
                    ->required()
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('size')
                    ->label('حجم المنتج')
                    ->required()
                    ,
                TextInput::make('weight')
                    ->label('وزن المنتج')
                    ->required()
                    ,
                TextInput::make('type')
                    ->label('نوع المنتج')
                    ->required()
                    ,
            ]);
    }
}