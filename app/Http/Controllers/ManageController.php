<?php

namespace App\Http\Controllers;

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
    }
    public function history(){
        return view('');
    }
    public function allUser(){
        return view('');
    }
}
