<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;
use Tilto\Commentable\Filament\Infolists\Components\CommentsEntry;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('title'),
                TextEntry::make('body')
                    ->columnSpanFull(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
                CommentsEntry::make('comments')
            ]);
    }
}
