<?php

use Illuminate\Support\Facades\Route;

Route::prefix('app')->middleware('api')
    ->group(__DIR__.'/api.php');

Route::prefix('app')->middleware('web')
    ->group(__DIR__.'/web.php');

