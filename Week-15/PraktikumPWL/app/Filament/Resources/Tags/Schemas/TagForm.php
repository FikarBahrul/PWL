<?php

namespace App\Filament\Resources\Tags\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class TagForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->required()
                ->maxLength(255)
                ->unique()
                ->validationMessages([
                    'unique' => 'Tag sudah ada',
                ]),
        ]);
    }
}
