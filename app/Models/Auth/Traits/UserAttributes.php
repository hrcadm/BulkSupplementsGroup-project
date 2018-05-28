<?php

namespace App\Models\Auth\Traits;

trait UserAttributes
{
	/**
	 * Insert only numbers into Database for phone number
	 *
	 * @param mix
	 */
	public function setPhone($value)
	{
		return preg_replace('/[^0-9.]+/', '', $value);
	}

	/**
	 * Insert only numbers into Database for mobile number
	 *
	 * @param mix
	 */
	public function setMobile($value)
	{
		return preg_replace('/[^0-9.]+/', '', $value);
	}
}