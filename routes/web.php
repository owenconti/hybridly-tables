<?php

use App\Data\UserData;
use App\Models\User;
use App\Tables\UserTable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return UserTable::make();
});
Route::get('/{user}', function (User $user) {
    return UserData::make($user);
});
