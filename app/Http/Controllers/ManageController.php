<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use DB;

class ManageController extends Controller
{
    public function pending()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();

        return view('custom.manage.pending')->with('profile', $profile);
=======
use Illuminate\Http\Request;
use App\ProfileTest;
use App\DirectoryManager;
use DB;


class ManageController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function pending(){
        return view('');
>>>>>>> c90dd2d8253aa7fa6efb96055d5c7806d5c21037
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
