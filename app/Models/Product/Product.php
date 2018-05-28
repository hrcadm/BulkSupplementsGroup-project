<?php

namespace App\Models\Product;

use App\Models\Product\Traits\ProductAttributes;
use App\Models\Product\Traits\ProductRelations;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use ProductAttributes, ProductRelations;

    protected $fillable = ['title', 'short_desc', 'long_desc', 'supplier', 'sku', 'tags'];
}
