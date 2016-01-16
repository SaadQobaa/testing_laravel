<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator,Auth,Redirect;

class InitiationController extends Controller
{
   
	public function display_initiation(){

	 return view('initiation.qtpp'); 
	}



	public function insert_qtpp(){

		  $rules = ['name'=>'required|min:5|max:250|alpha',
            'dosage_form'=>'max:250',
            'route_of_admin'=>'max:250',
            'dosage_strength'=>'max:250',
            'pharmacokinetics'=>'max:250',
            'stability'=>'max:250',
            'assay'=>'max:250',
            'water_content'=>'max:250',
            'content_uniformity'=>'max:250',
            'dissolution'=>'max:250',
            'disintegration'=>'max:250',
            'purity'=>'max:250',
            'container_closure_system'=>'max:250',
            'friability'=>'max:250'];

		//$validator = Validator::make(input::all(),$rules);
		// les rules 
				$qtpp =  Validator::make(Input::all(),$rules);
				/*
	 			$qtpp->name = $request->input('name');
                $qtpp->dosage_form = $request->input('dosage_form');
    	        $qtpp->route_of_admin = $request->input('route_of_admin');
                $qtpp->dosage_strength = $request->input('dosage_strength');
                $qtpp->pharmacokinetics = $request->input('pharmacokinetics');
                $qtpp->stability = $request->input('stability');
                $qtpp->assay = $request->input('assay');
                $qtpp->water_content = $request->input('water_content');
                $qtpp->content_uniformity = $request->input('content_uniformity');
                $qtpp->dissolution = $request->input('dissolution');
                $qtpp->disintegration = $request->input('disintegration');
                $qtpp->purity = $request->input('purity');
                $qtpp->container_closure_system = $request->input('container_closure_system');
                $qtpp->friability = $request->input('friability');

                $qttp-> save();
				*/
				
	return view('front.qbd');

	}




}
