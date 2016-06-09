<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dirigente extends Model
{
    protected $table="dirigente";
    protected $fillable= ['id','titulodocente_id'];
}
