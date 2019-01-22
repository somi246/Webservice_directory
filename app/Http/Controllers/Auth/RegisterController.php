<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\ProfileTest;
use App\ProfileTemp;
use App\ProfileRecord;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $profileTest = new ProfileTest;
        $profileTest->name = $data['name'];
        $profileTest->username = $data['username'];
        $profileTest->email = $data['email'];
        $profileTest->title = $data['title'];
        $profileTest->user_id = $data['user_id'];
        $profileTest->save();

        $profileTemp = new ProfileTemp;
        $profileTemp->name = $data['name'];
        $profileTemp->username = $data['username'];
        $profileTemp->email = $data['email'];
        $profileTemp->title = $data['title'];
        $profileTemp->user_id = $data['user_id'];
        $profileTemp->profile_id = $profileTest->id;
        $profileTemp->save();

        $profileRecord = new ProfileRecord;
        $profileRecord->profile_id = $profileTest->id;
        $profileRecord->status = "initialized";
        $profileRecord->updated_by = "auto";
        $profileRecord->save();



        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
