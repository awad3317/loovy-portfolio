<?php

namespace App\Filament\Resources\Products\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;


use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProductsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('brand_id')
                //     ->label('العلامة التجارية')
                //     ->numeric()
                //     ->sortable(),
                TextColumn::make('name')
                    ->label('الاسم')
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('الصورة')
                    ->circular() 
                    ->stacked() 
                    ->limit(1),
                ImageColumn::make('images')
                    ->label('الصور')
                    ->circular() // يجعل الصور دائرية
                    ->stacked() // يعرض أكثر من صورة متراكبة
                    ->limit(3),
                TextColumn::make('size')
                    ->label('الحجم')
                    ->searchable(),
                TextColumn::make('weight')
                    ->label('الوزن')
                    ->searchable(),
                TextColumn::make('type')
                    ->label('النوع')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->label('تاريخ الإنشاء')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->label('تاريخ التحديث')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}