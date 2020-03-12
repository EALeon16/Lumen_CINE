<?php

namespace App\Http\Controllers;

use App\Boleto;
use App\Persona;
use DB;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class HistorialController extends BaseController
{
    

    public function getHistorialC(Request $request){
       $comprobante=DB::table('modelo_boleto')
       ->join('modelo_persona', 'modelo_persona.persona_id', '=', 'modelo_boleto.persona_id')
       ->join('modelo_horario', 'modelo_horario.horario_id', '=', 'modelo_boleto.boleto_id')
       ->select('modelo_boleto.cantidad_boletoN','modelo_boleto.cantidad_boletoE','modelo_boleto.total_boleto', 'modelo_boleto.precio_total', 'modelo_persona.username','modelo_horario.horario_id')
       ->get();
       dd($comprobante);
    }


    public function getComprobante(Request $request, $username){
        
        $comprobante=DB::table('modelo_persona')
        ->where('modelo_persona.username', '=', $username)
       ->join('modelo_boleto', 'modelo_boleto.persona_id', '=', 'modelo_persona.persona_id')
       ->join('modelo_horario', 'modelo_horario.horario_id', '=', 'modelo_boleto.horario_id')
       ->join('modelo_sala', 'modelo_sala.sala_id', '=', 'modelo_horario.sala_id')
       ->join('modelo_pelicula', 'modelo_pelicula.pelicula_id', '=', 'modelo_horario.pelicula_id')
       ->select('modelo_boleto.cantidad_boletoN','modelo_boleto.cantidad_boletoE','modelo_boleto.total_boleto','modelo_horario.fecha_pelicua','modelo_horario.hora_pelicula', 'modelo_pelicula.nombre_pelicula','modelo_boleto.precio_total','modelo_sala.nombre_sala')
       ->orderBy ('modelo_horario.fecha_pelicua','DESC')
       ->get();

       if(!$comprobante->isEmpty()){
        $status = true;
        $info = "Data is listed succesfully";
    }else{
        $status = false;
        $info = "Data is not listed succesfully";
    }
       return ResponseBuilder::result($status, $info, $comprobante);
}



   


}