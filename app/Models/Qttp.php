<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qttp extends Model
{
    

	protected $table = 'qttp';



	public function projects(){


		return $this->belongsTo('App\Models\Project');

	}



	public function users() {

		return $this -> belongsToMany('App\Models\User');

}



	// Insert  Qttp in database related to project 






}
