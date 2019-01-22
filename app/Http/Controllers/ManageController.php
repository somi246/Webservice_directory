<?php

namespace App\Http\Controllers;

use DB;

class ManageController extends Controller
{
    public function pending()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();
        $isManager = $this->isManager($username);
        if(!$isManager){
            return redirect()->route('home');
        }
        else{
            return view('custom.manage.pending')->with(compact('profile','isManager'));
        }
    }
    public function history()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();
        $isManager = $this->isManager($username);
        if(!$isManager){
            return redirect()->route('home');
        }
        else{
            return view('custom.manage.history')->with(compact('profile','isManager'));
        }
    }
    public function allUser()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();
        $isManager = $this->isManager($username);

        if(!$isManager){
            return redirect()->route('home');
        }
        else{
            return view('custom.manage.allusers')->with(compact('profile','isManager'));
        }
    }


    private function isManager($username){
        $manager = DB::table('directory_manager')->where('username', $username)->first();
        if(is_null($manager)){
            $isManager = false;
        }
        else{
            $isManager = true;
        }

        return $isManager;
    }
}
