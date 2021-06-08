<?php

use Acs\Dboard\Http\Controllers\DboardController;
use Acs\Dboard\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'dboard', 'as' => 'dboard.', 'middleware'=>['web','dboard','auth']], function () {
    Route::get('/', [DboardController::class,'dboard'])->middleware('auth');

    Route::resource('user', UserController::class);
    // template explorer routes
    Route::get('/bootstrap-components', [DboardController::class,'bootstrap_components'])->name('bootstrap-components');
    Route::get('/cards', [DboardController::class,'cards'])->name('cards');
    Route::get('/form-components', [DboardController::class,'form_components'])->name('form-components');
    Route::get('/custom-form-components', [DboardController::class,'custom_form_components'])->name('custom-form-components');
    Route::get('/form-sample', [DboardController::class,'form_sample'])->name('form-sample');
});
