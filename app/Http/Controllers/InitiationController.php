<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class InitiationController extends Controller
{
   
	public function display_initiation(){

	 return view('initiation.qtpp'); 
	}



	public function insert_qtpp(){

	//$dosage_form = Input::get('dosage_form');
			// etc .. 

	/*
	$array_to_db= Nom_de_la_table_qtpp::create([
                        'dosage_form'=>$dosage_form,
                        'password'=>Hash::make($password)
                    ]);

                Session::flash('messages',['Qtpp successfully added to the project !'] );
	*/
	

	return view('front.qbd');

	}




}
