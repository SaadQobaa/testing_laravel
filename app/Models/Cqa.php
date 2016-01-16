<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cqa extends Model
{
    protected $table = 'cqa';

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
