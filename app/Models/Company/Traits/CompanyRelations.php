<?php

namespace App\Models\Company\Traits;

use App\Models\Auth\User;

trait CompanyRelations
{
	/**
	 * Company can be related to multiple users
	 * 
	 * @return mix
	 */
	public function user()
	{
		return $this->hasMany('App\Models\Auth\User');
	}
}