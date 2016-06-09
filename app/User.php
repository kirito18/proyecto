<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /*define modelos para pasar las variables*/
    protected $fillable = [
        'name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /**
     * @return array
     */
    public function User()
    {

        return $this->belongsTo('App\titulodocente');
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
