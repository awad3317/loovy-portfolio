<?php

namespace App\Filament\Resources\Products\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\Repeater;

class ProductForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                // ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
                // القسم الأول: البيانات الأساسية
                // ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
                Section::make('البيانات الأساسية')
                    ->schema([

                        Select::make('brand_id')
                            ->label('العلامة التجارية')
                            ->relationship('brand', 'title')
                            ->required()
                            ->preload(),

                        TextInput::make('name')
                            ->label('اسم المنتج')
                            ->required(),

                        Textarea::make('description')
                            ->label('وصف المنتج')
                            ->required()
                            ->columnSpanFull(),

                    ])
                    ->columns(2),


                // ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
                // القسم الثاني: المواصفات
                // ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
                Section::make('المواصفات')
                    ->schema([

                        TextInput::make('size')
                            ->label('حجم المنتج')
                            ->required(),

                        TextInput::make('weight')
                            ->label('وزن المنتج')
                            ->required(),

                        Select::make('type')
                            ->label('نوع المنتج')
                            ->relationship('brand', 'slug')
                            ->required(),

                    ])
                    ->columns(3),

                Repeater::make('details')
                    ->label('تفاصيل المنتج')
                    ->schema([
                        TextInput::make('detail')
                            ->label('التفصيل')
                            ->placeholder('أدخل التفصيل هنا')
                    ])
                    ->dehydrateStateUsing(fn($state) => collect($state)->pluck('detail')->toArray())
                    ->addActionLabel('إضافة تفصيل جديد')
                    ->columnSpanFull(),

                // ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
                // القسم الثالث: الصور
                // ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬
                Section::make('رفع الصورة الرئيسية للمنتج')
                    ->schema([

                        FileUpload::make('image')
                            ->label('الصورة الرئيسية للمنتج')
                            ->image()
                            ->directory('products')
                            ->required(),

                    ]),

                Section::make('رفع الصور الإضافية للمنتج')
                    ->schema([


                        FileUpload::make('images')
                            ->label('صور إضافية للمنتج')
                            ->image()
                            ->multiple()
                            ->appendFiles()
                            ->reorderable()
                            ->directory('products')
                            ->required(),

                    ])

            ]);
    }
}