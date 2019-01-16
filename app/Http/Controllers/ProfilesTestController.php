<?php

namespace App\Http\Controllers;

use App\ProfileTest;
use Illuminate\Http\Request;

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
        $id = 1;
        $profile = ProfileTest::find($id);
        return view('custom.profiles.index')->with('profile', $profile);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $profile = ProfileTest::find($id);

        return view('custom.profiles.edit')->with('profile', $profile);
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'title' => 'required',
            'short_title' => 'required',
            'department' => 'required',
            'phone' => 'required',
            'office_location' => 'required',
            'website' => 'required',
            'skype_username' => 'required',
            'office_hour' => 'required',
            'bio' => 'required',

            'img' => 'image|nullable|max:1999',
        ]);
        // Handle File Upload
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
        // Update Profile
        $profile = ProfileTest::find($id);

        $profile->short_title = $request->input('short_title');
        $profile->department = $request->input('department');
        $profile->phone = $request->input('phone');
        $profile->office_location = $request->input('office_location');
        $profile->website = $request->input('website');
        $profile->skype_username = $request->input('skype_username');
        $profile->office_hour = $request->input('office_hour');
        $profile->id = auth()->user()->id;
        $profile->bio = $request->input('bio');
        $profile->degree_type = $request->input('degree_school');
        $profile->degree_school = $request->input('degree_school');
        $profile->img = $fileNameToStore;
        $profile->save();
        return redirect('/profile')->with('success', 'Post Updated');
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
}
