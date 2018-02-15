<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroController extends Controller
{
    
    /**
     * Store a new user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function new(Request $request)
    {
        $name = $request->input('name');
		$last_name = $request->input('last_name');
        $email = $request->input('email');
        $fecha_nacimiento = $request->input('fecha_nacimiento');
        $avatar = $request->input('avatar');
        $terminos= $request->input('terminos');

        echo "Registro";
        die();

        //
    }

}
