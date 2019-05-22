<?php

namespace App\Http\Controllers\Auth;

use App\VanDriver;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Auth;
use Image;

class VanDriverRegisterController extends Controller
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
    protected $redirectTo = '/vanDriver';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:vanDriver');
    }


    public function showRegistrationForm()
    {
        return view('auth.signUpSchoolVanDriver');
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
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // *
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\User
     
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

        'firstName'   => 'required',
        'lastName'   => 'required',
        // 'address'   => 'required',
        'email'   => 'required|email|unique:van_owners',
        // 'homeNumber' => 'required',
        'mobileNumber' => 'required',
        'nic' => 'required',
        // 'photo' => 'required',
        'city' => 'required',
        'province' => 'required',
        // 'gender' => 'required',
        // 'photo' => 'required',
        'password' => 'required',
        'confirmPassword' => 'required'
        
      ]);

      $VanDriver=new VanDriver;
      $VanDriver->firstName = $request -> input('firstName'); 
      $VanDriver->lastName = $request -> input('lastName');
      // $VanDriver->address = $request -> input('address');
      $VanDriver->email = $request -> input('email');
      // $VanDriver->homeNumber = $request -> input('homeNumber');
      $VanDriver->mobileNumber = $request -> input('mobileNumber');
      $VanDriver->nic = $request -> input('nic');
      
      // $VanDriver->gender = $request -> input('gender');
      
   


      if($request ->hasfile('photo')){
        $photo = $request->file('photo');
        $filename = time().'.'.$photo->getClientOriginalExtension();
        $location = public_path('Images/vanDriver/ProfilePictures/'.$filename);
        Image::make($photo)->save($location);

        $VanDriver->photo=$filename;
      } 

      $VanDriver->city = $request -> input('city');
      $VanDriver->province = $request -> input('province');
      $VanDriver->password = Hash::make($request -> input('password'));
      $VanDriver->confirmPassword = Hash::make($request -> input('confirmPassword'));   
     

      $VanDriver->save();

       if (Auth::guard('vanDriver')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // if successful, then redirect to their intended location
        return redirect()->intended(route('vanDriver.dashboard'));
      }
    }
}
