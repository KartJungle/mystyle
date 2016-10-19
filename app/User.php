<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Junaidnasir\Larainvite\InviteTrait;

class User extends Authenticatable
{
    use InviteTrait;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','dob','gender'
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
