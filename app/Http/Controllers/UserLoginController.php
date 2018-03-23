<?php

namespace App\Http\Controllers  ;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use App\Models\Clientes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Auth;


class UserLoginController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles authenticating users for the application and
  | redirecting them to your home screen. The controller uses a trait
  | to conveniently provide its functionality to your applications.
  |
  */

  use AuthenticatesUsers;

  /**
  * Where to redirect users after login.
  *
  * @var string
  */
  protected $redirectTo = '/home';



  public function doLogin(Request $request){

    $rules = array(
      'email'    => 'required|email', // make sure the email is an actual email
      'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
    );

    $validator = Validator::make($request->all(), $rules);

    // if the validator fails, redirect back to the form
    if ($validator->fails()) {
      return redirect('/login')
      ->withErrors($validator) // send back all errors to the login form
      ->withInput(); // send back the input (not the password) so that we can repopulate the form


    } else {

      // create our user data for the authentication
      $userdata = array(
        'email'     => $request->get('email'),
        'password'  => $request->get('password')
      );

      // attempt to do the login
      if (Auth::attempt($userdata)) {

        // validation successful!
        // redirect them to the secure section or whatever
        // return Redirect::to('secure');
        // for now we'll just echo success (even though echoing in a controller is bad)
        return redirect()->route('dashboard');

      } else {

        // validation not successful, send back to form
        return redirect()->route('login');

      }



    }
  }

  public function logout(Request $request){

    Auth::logout();
    return redirect('/login');

  }

}
