<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function qtpp() 
	{
		return $this->hasMany('App\Models\Qtpp');
	}

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function cqa() 
	{
		return $this->hasMany('App\Models\Cqa');
	}

	/**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function risk_factors() 
	{
		return $this->hasMany('App\Models\Risk_factors');
	}

	/**
	 * Many to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsToMany
	 */
	public function users() 
	{
		return $this->belongsToMany('App\Models\User');
	}
}
