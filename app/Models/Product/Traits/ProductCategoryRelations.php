<?php

namespace App\Models\Product\Traits;

use App\Models\Product\ProductCategories;

trait ProductCategoryRelations
{
	public function product()
	{
		return $this->belongsToMany('App\Models\Product\Product');
	}
}