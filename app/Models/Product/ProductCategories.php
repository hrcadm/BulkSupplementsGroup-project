<?php

namespace App\Models\Product;

use App\Models\Product\Traits\ProductCategoryAttributes;
use App\Models\Product\Traits\ProductCategoryRelations;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use ProductCategoryAttributes, ProductCategoryRelations;

    public $timestamps = false;

    protected $fillable = ['name'];
}
