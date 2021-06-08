<?php


namespace Acs\Profile\Http\Controllers;


class ProfileController
{
    public function get_profile_details(){
        return view('profile::profile');
    }
}
