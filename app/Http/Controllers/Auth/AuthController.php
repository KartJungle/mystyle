<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Invite;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/mystyle';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'firstname' => 'required|max:255',
			'lastname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
			'dob' => 'required|date',
			'gender' => 'required|in:M,F',
      'invite_code' => 'required|max:100'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
		$name = $data['firstname']." ".$data['lastname'];

    dd($data);
    //Check if Invited.
    if(Invite::isAllowed($data['invite_code'],$data['email']))
    {
      $invitation = Invite::get($code); //retrieve invitation modal

        // Register the user.
        Invite::consume($data['invite_code']);
        return User::create([
            'name' => $name,
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'gender' => $data['gender'],
            'dob' => $data['dob'],
        ]);
    }
    // either refCode is inavalid, or provided email was not invited against this refCode
    else
    {
      switch (Invite::status($data['invite_code']))
      {
        case 'pending':
          # code...
          break;
        case 'successful':
          # code...
          break;
        case 'canceled':
          # code...
          break;
        case 'expired':
          # code...
          break;
        default:
          # code...
          break;
      }
    }

  }
}
