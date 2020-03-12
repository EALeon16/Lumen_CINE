<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Collection;
use App\Persona;
use DB;
use App\Http\Helper\ResponseBuilder;
use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;

class PersonaController extends BaseController
{

    public function createPersona(Request $request){
        $persona = new Persona();
        //$persona->cedula = $request->cedula;
        $persona->username = $request->username;
        $persona->first_name = $request->first_name;
        $persona->last_name = $request->last_name;
        $persona->email = $request->email;
        $persona->is_superuser = 1;
        $persona->is_staff = 1;
        $persona->is_active = 1;
        $persona->password = $request->password;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->edad = $request->edad;
        $persona->date_joined = '2020-02-29 05:00:36.469159';
        $persona->rol_id  = $request->rol_id ;
        

        $persona->save();
        

        
        return response()->json($persona);
        

    }


    public function getPersona(Request $request, $username){
        
        $cliente = Persona::where('username',$username)->get();
        if(!$cliente->isEmpty()){
            $status = true;
            $info = "Data is listed succesfully";
        }else{
            $status = false;
            $info = "Data is not listed succesfully";
        }
        return ResponseBuilder::result($status, $info, $cliente);
   
        $status = false;
        $info = "Unauthorized";
        
    
    return ResponseBuilder::result($status, $info);
}


public function editPersona(Request $request, $username){

    $comprobante=DB::table('modelo_persona')
        ->where('modelo_persona.username', '=', $username)
        ->update(['modelo_persona.email'=> $request->email,'modelo_persona.direccion'=> $request->direccion]);
       print($comprobante);
        
       return $echo = "success";;
}
   


}