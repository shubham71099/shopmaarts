<?php

namespace App\Http\Controllers\customer\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\customer;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use DB;
use Session;

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
    protected $redirectTo = '/customer/cust_home';

    public function showregisterform()
    {   
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart); 

        return view('customer.auth.register')->withCart($cart);
    }
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
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
        return customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function customer_register_submit(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());

        return redirect()->route('cust_home');
    }
     public function cust_home()
    {
        $cart = Session::has('userdata')?Session::get('userdata'):null;
       
        Session::put('userdata',$cart);

        $cid = \Auth::guard('customer')->user()->id;

        $data=DB::table('customers')
             ->where('id','=',$cid)
             ->get();   

        return view('customer.cust_home')->withCart($cart)->withData($data);
    }
   
}
