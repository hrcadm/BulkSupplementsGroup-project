<?php

namespace App\Models\Membership;

use App\Models\Membership\Traits\MembershipAttributes;
use App\Models\Membership\Traits\MembershipRelations;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use MembershipAttributes, MembershipRelations;

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];
}
