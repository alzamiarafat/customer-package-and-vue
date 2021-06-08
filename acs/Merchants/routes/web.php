<?php

// use Acs\Merchants\Http\Controllers\MerchantController;
use Illuminate\Support\Facades\Route;

// Route::get('/addMerchant', [MerchantController::class, 'addIndex']);
// Route::post('/addMerchant', [MerchantController::class, 'store']);


Route::resource('merchant', "Acs\Merchants\Http\Controllers\MerchantController");