<?php

namespace App\Models\Auth\Traits;

use App\Models\Company;
use App\Models\Membership;


trait UserRelations
{
	/**
	 * User can be related to only one company
	 * 
	 * @return mix
	 */
	public function company()
	{
		return $this->belongsTo('App\Models\Company\Company');
	}

	/**
	 * User can be related to only one membership
	 * 
	 * @return mix
	 */
	public function membership()
	{
		return $this->belongsTo(Membership\Membership::class);
	}
}