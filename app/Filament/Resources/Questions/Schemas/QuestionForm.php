<?php

namespace App\Filament\Resources\Questions\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class QuestionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('section_id')
                    ->relationship('section', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                    ])
                    ->editOptionForm([
                        TextInput::make('name')
                    ])
                    ->label('Betrifft')
                    ->required(),
                TextInput::make('question')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('answer')
                    ->required()
                    ->columnSpanFull()
            ])->columns(1);
    }
}
