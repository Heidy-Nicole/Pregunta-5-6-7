<?php
//crea un controlador de director que muestre los datos de director bancario

namespace App\Controllers;

use App\Models\persona_modelo;

class directorController extends BaseController
{
    public function index()
    {
       


       $usuario = session('data');
       $persona = new persona_modelo();
        

       $datos = $persona->where('correo', $usuario['email'])->first();

        
       return view('hola');//, $data);
    }
}