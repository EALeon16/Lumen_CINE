<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Cartelera extends Model 
{
    protected $table ='modelo_horario';
    protected $primaryKey = 'horario_id';
    

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