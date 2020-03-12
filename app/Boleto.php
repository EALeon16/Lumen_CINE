<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Boleto extends Model 
{
    protected $table ='modelo_boleto';
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cantidad_boletoN', 'cantidad_boletoE', 'total_boleto', 'horario_id','persona_id'
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