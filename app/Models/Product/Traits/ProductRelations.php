<?php

namespace App\Models\Product\Traits;

trait ProductRelations
{
	public function category()
	{
		return $this->belongsToMany('App\Models\Product\ProductCategories', 'category_product', 'product_id', 'category_id');
	}

	public function subCategory()
	{
		return $this->belongsToMany('App\Models\Product\ProductSubCategories', 'product_subcategory', 'product_id', 'subcategory_id');
	}
}