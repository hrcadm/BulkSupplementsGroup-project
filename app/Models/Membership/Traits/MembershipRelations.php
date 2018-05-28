<?php

namespace App\Models\Membership\Traits;

use App\Models\Auth\User;

trait MembershipRelations
{
	/**
	 * Membership can be related to multiple users
	 * 
	 * @return mix
	 */
	public function user()
	{
		return $this->hasMany('App\Models\Auth\User');
	}
}