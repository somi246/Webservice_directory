<?php

namespace App\Http\Controllers;

use App\ProfileTest;
use App\ProfileTemp;
use App\DirectoryManager;
use Illuminate\Http\Request;
use DB;

class ProfilesTestController extends Controller
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();
        $isManager = $this->isManager($username);

        return view('custom.profiles.index')->with(compact('profile', 'isManager'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $username = \Auth::user()->username;
        $profile = DB::table('profile_tests')->where('username', $username)->first();
        $profile_temp = DB::table('profile_temp')->where('username', $username)->first();
        $isManager = $this->isManager($username);

        return view('custom.profiles.edit')->with(compact('profile', 'profile_temp', 'isManager'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        /*
        $this->validate($request, [

            'img' => 'image|nullable|max:1999',
        ]);
        */

        /* Handle File Upload
        if ($request->hasFile('cover_image')) {
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }
        */

        // Update ProfileTemp
        $profileTemp = ProfileTemp::find($id);

        $profileTemp->name = $request->input('name');
        $profileTemp->email = $request->input('email');
        $profileTemp->username = $request->input('username');
        $profileTemp->title = $request->input('title');
        $profileTemp->short_title = $request->input('short_title');
        $profileTemp->department = $request->input('department');
        $profileTemp->phone = $request->input('phone');
        $profileTemp->phone_type = $request->input('phone_type');
        $profileTemp->office_location = $request->input('office_location');
        $profileTemp->website = $request->input('website');
        $profileTemp->skype_username = $request->input('skype_username');
        $profileTemp->office_hour = $request->input('office_hour');
        $profileTemp->bio = $request->input('bio');
        $profileTemp->degree_type = $request->input('degree_type');
        $profileTemp->degree_school = $request->input('degree_school');
        $profileTemp->img = $request->input('img');
        $profileTemp->save();
        return redirect('/profile')->with('success', 'Submit Successful! Waiting for your manager to approve');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * check the manager status
     */
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
