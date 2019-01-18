<?php

namespace App\Http\Controllers;
use DB;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $username = \Auth::user()->username;
        $manager = DB::table('directory_manager')->where('username', $username)->first();
        if(is_null($manager)){
            $isManager = false;
        }
        else{
            $isManager = true;
        }
        return view('custom.dashboard')->with('isManager', $isManager);
    }

    public function about()
    {
        return view('custom.about');
    }

    public function contact()
    {
        return view('custom.contact');
    }

}
