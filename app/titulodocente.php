<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class titulodocente extends Model
{
    protected $table="titulodocente";
    protected $fillable=['id','descripcion','user_id'];

    /**
     * @return array
     */
    public function titulodocentes()
    {
        return $this->hasMany('App\User');
    }
}
