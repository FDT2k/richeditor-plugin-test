<?php

namespace App\Filament\Resources\Pages\Schemas;

use App\Filament\Forms\Components\RichEditor\Plugins\InvisiblePlugin;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('content')
                    ->plugins([
                        InvisiblePlugin::make(),
                    ])
                    ->toolbarButtons([
                        'invisible',
                    ])
                    ->required(),
            ]);
    }
}
