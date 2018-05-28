<?php

namespace App\Models\Product\Traits;

use App\Models\Product\ProductSubCategories;

trait ProductSubCategoryRelations
{
	public function products()
	{
		return $this->belongsToMany('App\Models\Product\Product');
	}
}