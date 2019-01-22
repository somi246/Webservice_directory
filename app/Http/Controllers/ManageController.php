<?php

namespace App\Http\Controllers;

use DB;

class ManageController extends Controller
{
    public function pending()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();

        return view('custom.manage.pending')->with('profile', $profile);
    }
    public function history()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();

        return view('custom.manage.history')->with('profile', $profile);
    }
    public function allUser()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();

        return view('custom.manage.allusers')->with('profile', $profile);
    }
}
