<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Risk_factors extends Model
{
    protected $table = 'risk_factors';

    /**
	 * One to Many relation
	 *
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function projects() 
	{
		return $this->belongsTo('App\Models\Project');
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
