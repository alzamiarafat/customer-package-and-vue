<?php

use Acs\Dboard\Http\Controllers\DboardController;
use Acs\Dboard\Http\Controllers\Operator\MerchantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::group(['prefix' => 'operator', 'as' => 'operator.', 'middleware' => ['verified', 'operator']], function () {
    Route::resource('merchant', MerchantController::class);
});
