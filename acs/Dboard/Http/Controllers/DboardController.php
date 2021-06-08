<?php


namespace Acs\Dboard\Http\Controllers;


use App\Models\User;

class DboardController
{
    public function dboard()
    {

        $users = User::count();
        return auth()->user()->weight >= 99.99 ? view('dboard::dboard',['users'=>$users]) : view('dboard::operator.dboard',['users'=>$users]);;
    }
}
