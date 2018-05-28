<?php

namespace App\Models\Auth;

use App\Models\Auth\Traits\UserAttributes;
use App\Models\Auth\Traits\UserRelations;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, UserAttributes, UserRelations;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'first_name', 'last_name', 'suffix', 'phone', 'mobile', 'fax', 'email'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
