<?php

namespace App\Models\Company;

use App\Models\Company\Traits\CompanyAttributes;
use App\Models\Company\Traits\CompanyRelations;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use CompanyAttributes, CompanyRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address_one', 'address_two', 'city', 'state', 'post_code', 'phone', 'country', 'fax', 'email', 'website'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
