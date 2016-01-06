<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Validator,Session,Auth;

class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function display_login()
    {
        return view('auth.login');
    }

     public function check_login()
    {
       

        $rules = [ 'password'=>'required|max:64',
                    'email'=>'required|max:320|email'
        ];

        $custom_msg = [ 'password.required'=>'You have to fill the password form.',
                        'password.max'=>'Your maximum password length is 64.',
                        'email.required'=>'You have to fill the email form.',
                        'email.max'=>'Your maximum password length is 320.',
                        'email.email'=>'This id not a valid email.',
        ];

        $validator = Validator::make(Input::all(),$rules,$custom_msg);

        if($validator->fails()){

            Session::flash('errors',$validator->messages()->all() );

            return view('auth.login');
        }
        else{

            $password = Input::get('password');
            $email = Input::get('email');

            
            

            if (Auth::attempt(['email' => $email, 'password' => $password])) {

                //fake auth, do not work yet
                 Session::flash('messages',["Successfully logged with email $email."]);

                 return view('front.index');
            }
            else{
                //fake auth, do not work yet
                 Session::flash('errors',["Oh snap ... the authentification is not successfull."]);

                 return view('auth.login');
            }

           
        }  
    }
}
