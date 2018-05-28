<?php

namespace App\Models\Product;

use App\Models\Product\Traits\ProductSubCategoryAttributes;
use App\Models\Product\Traits\ProductSubCategoryRelations;
use Illuminate\Database\Eloquent\Model;

class ProductSubCategories extends Model
{
    use ProductSubCategoryAttributes, ProductSubCategoryRelations;

    public $timestamps = false;

    protected $fillable = ['name'];
}
