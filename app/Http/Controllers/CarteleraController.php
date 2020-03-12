<?php

namespace App\Http\Controllers;

use App\Cartelera;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use DB;
use Laravel\Lumen\Routing\Controller as BaseController;

class CarteleraController extends BaseController
{
    public function getAll(Request $request){
        $horarios =Cartelera::all();
        return response()->json($horarios, 200);
    }

    public function getCartelera(Request $request){
       $horarios=DB::table('modelo_horario')
       ->join('modelo_pelicula', 'modelo_pelicula.pelicula_id', '=', 'modelo_horario.pelicula_id')
       ->join('modelo_sala', 'modelo_sala.sala_id', '=', 'modelo_horario.sala_id')
       ->select('modelo_horario.hora_pelicula','modelo_horario.fecha_pelicua', 'modelo_pelicula.nombre_pelicula','modelo_pelicula.imagen', 'modelo_sala.nombre_sala')
       ->get();
       if(!$horarios->isEmpty()){
        $status = true;
        $info = "Data is listed succesfully";
    }else{
        $status = false;
        $info = "Data is not listed succesfully";
    }
       return ResponseBuilder::result($status, $info, $horarios);

    }



   


}