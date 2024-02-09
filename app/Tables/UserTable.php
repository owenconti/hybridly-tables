<?php

namespace App\Tables;

use App\Models\User;
use App\Data\UserData;
use Hybridly\Tables\Columns\TextColumn;
use Hybridly\Tables\Table;

final class UserTable extends Table
{
    protected string $model = User::class;
    protected string $data = UserData::class;

    protected function defineColumns(): array
    {
        return [
            TextColumn::make('id')->label('#'),
            TextColumn::make('name'),
            TextColumn::make('email'),
            TextColumn::make('created_at'),
        ];
    }

    protected function defineRefiners(): array
    {
        return [];
    }

    protected function defineActions(): array
    {
        return [];
    }
}
