<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Pelicula extends Model 
{
    protected $table ='modelo_pelicula';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    ];


    public $timestamps = false;

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    /*
    protected $hidden = [
        'password',
    ];
    */
}