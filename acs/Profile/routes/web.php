<?php

use Acs\Profile\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/profile/details', [ProfileController::class, 'get_profile_details']);
