<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Persona extends Model 
{
    protected $table ='modelo_sala';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'first_name', 'last_name', 'email','password'. 'fechaNacimiento', 'edad',
        'rol_id ','is_superuser','is_staff','is_active', 'date_joined' 
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