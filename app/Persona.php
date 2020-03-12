<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;
use Laravel\Lumen\Auth\Authorizable;

class Persona extends Model 
{
    protected $table ='modelo_persona';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email'
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
