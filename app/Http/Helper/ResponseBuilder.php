<?php

namespace App\Http\Helper;

class ResponseBuilder{
    public static function result($status="",$info="",$data=""){
        return [
            "succes"=>$status,
            "informacion"=>$info,
            "data"=>$data,
        ];
    }
}