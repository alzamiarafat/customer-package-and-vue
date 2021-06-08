<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DboardController extends Controller
{

    public function dboard()
    {
        $users = User::count();
        return view('dboard.dboard',['users'=>$users]);
    }

}
