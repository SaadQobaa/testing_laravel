<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth,Validator,Hash,Session,Redirect;

class RegisterController extends Controller
{
   

    public function display()
    {
        if(Auth::check()){
               return view('front.index');
        }
        else{
             return view('auth.register');
        }
      

    }

     public function register()
    {
        if(Auth::check()){
               return view('front.index');
        }
        else{

             $rules = [ 'password'=>'required|max:64',
                        'email'=>'required|max:320|email|unique:users'
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

                return view('auth.register');
            }
            else{

                $password = Input::get('password');
                $email = Input::get('email');

                $u=User::create([
                        'email'=>$email,
                        'password'=>Hash::make($password)
                    ]);

                Session::flash('messages',['successfully registered !'] );

                return view('front.index');
            }  
        }
      

    }
}
