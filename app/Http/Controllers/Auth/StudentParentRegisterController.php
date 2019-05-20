<?php

namespace App\Http\Controllers\Auth;

use App\StudentParent;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;

class StudentParentRegisterController extends Controller
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
    protected $redirectTo = '/studentParent';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:studentParent');
    }


    public function showRegistrationForm()
    {
        return view('auth.studentParentregister');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    // public function register(){
    //     echo "Got the request";
    // }


    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:student_parents'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
     
    // protected function create(array $data)
    // {
    //     return StudentParent::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function register(Request $request){

        $this->validate($request, [
        'name'   => 'required',
        'email'   => 'required|email|unique:student_parents',
        'password' => 'required'
        
      ]);

      $StudentParent=new StudentParent;
      $StudentParent->name = $request -> input('name'); 
      $StudentParent->email = $request -> input('email');
      $StudentParent->password = Hash::make($request -> input('password')) ;   
     

      $StudentParent->save();

    //   // auth()->login($user);
    // return redirect(route('studentParent.dashboard'));

     if (Auth::guard('studentParent')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('studentParent.dashboard'));
      }

    }
}
