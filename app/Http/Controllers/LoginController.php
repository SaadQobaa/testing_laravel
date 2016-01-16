<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
//use Validator,Session,Auth,Redirect;
use Validator,Auth,Redirect;
class LoginController extends Controller
{
    
//protected $remember = (Auth::viaRemember()) ? true : false;

    public function display_login()
    {
        if(Auth::viaRemember()){

            return view('front.qbd');
        } else {

        return view('auth.login');
    }

    }

     public function check_login()
    {
       
       $throttles = in_array(ThrottlesLogin::class,class_uses_recursive(get_class($this)));


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
	       //$remember = (Auth::viaRemember()) ? true : false;
            
	
            if (Auth::attempt(['email' => $email, 'password' => $password])) { // || Auth::viaRemember()
                  
                 
                 Auth::login(Auth::user(),true);
                
                 Session::flash('messages',["Successfully logged with email $email."]);
		         Session::save() ;


                 return view('front.qbd');
            }
            else{
                
                 Session::flash('errors',["Authentification failed. Please check your credentials"]);

                 return view('auth.login');
            }

        
    }

    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        Session::flash('messages',["Successfully logged out."]);

        return  view('front.index');
    }
}
