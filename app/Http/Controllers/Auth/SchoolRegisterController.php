<?php

namespace App\Http\Controllers\Auth;

use App\School;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;

class SchoolRegisterController extends Controller
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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function showRegistrationForm()
    {
        return view('auth.signUpSchool');
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
              
            'schoolName'=>'required',
            'address'=>'required',
            'email'   => 'required|email|unique:schools',
            'contactNumber'=>'required',
            'password'=>'required',
            'confirmPassword'=>'required',
            'city'=>'required',
            'province'=>'required'
        
      ]);
        

        $School=new School;
        $School->schoolName = $request -> input('schoolName');
        $School->address = $request -> input('address');
        $School->email = $request -> input('email');
        $School->contactNumber = $request -> input('contactNumber');
        $School->password = Hash::make($request -> input('password')); 
        $School->confirmPassword =  Hash::make($request -> input('confirmPassword')); 
        $School->city = $request -> input('city');
        $School->province = $request -> input('province');
          
     

        $School->save();

    // //   // auth()->login($user);
     // return redirect('/home');

     // if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
     //    // if successful, then redirect to their intended location
     //    return redirect()->intended('/home');
     //  }

    }
}
