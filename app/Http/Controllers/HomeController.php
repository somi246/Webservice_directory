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
        return view('custom.dashboard')->with('isManager', $this->isManager());
    }

    public function about()
    {
        $isManager = $this->isManager();
        return view('custom.about')->with('isManager', $this->isManager());
    }

    public function contact()
    {
        return view('custom.contact')->with('isManager', $this->isManager());
    }

    private function isManager(){
        $username = \Auth::user()->username;
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
