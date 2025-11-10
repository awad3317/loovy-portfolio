<?php

namespace App\Filament\Resources\Branches\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('country_id')
                    ->label('الدولة')
                    ->relationship('country', 'name')
                    ->required()
                    ,
                TextInput::make('name')
                    ->label('اسم الفرع')
                    ->required(),
                TextInput::make('address')
                    ->label('عنوان الفرع')
                    ->required(),
                TextInput::make('phone')
                    ->label('رقم الهاتف')
                    ->tel()
                    ->numeric()
                    ->required(),
            ]);
    }
}