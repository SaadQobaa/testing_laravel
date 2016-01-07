<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
   


  public function __construct(){

	$this->beforeFilter('auth');
  }


  // Display a listing of the user 


  public function index(){
	$users=User::all();

	return View::make('user.index',['users'=> $users]);

  }


  // Show the form to create a new user 
	
  public function create(){

	return View::make('user.create');
  }


  // store a new user in storage 


  public function store(){
	$user = new User;
	//$remember = (Input::has('remember')) ? true : false;
	
	$user -> first_name = Input::get('name');
	$user -> last_name = Input::get('username');
	$user -> email  = Input::get('email');
	$user -> password = Hash::make(Input::get('password'));
	$user -> remember_token = 'blabla'; 
//name , username , email , password, 

	$user -> save();
	return Redirect::to('/user');

  } 
 // Update user 

  public function update($id){

	$user = User::find($îd);
	$user -> first_name = Input::get('name');
	$user -> last_name = Input::get('username');
	$user -> email  = Input::get('email');
	$user -> password = Hash::make(Input::get('password'));
	$user -> remember_token = Hash::make(str_random(40)); 
  //name , username , email , password, 

	$user -> save();
	return Redirect::to('/user');


  }


 // Remove user 

	public function destroy($id){


	User::destroy($id);
	return Redirect::to('/user');


	}

}
