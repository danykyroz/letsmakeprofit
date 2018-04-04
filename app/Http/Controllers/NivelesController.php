<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clientes;
use App\Models\Notificaciones;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;


class NivelesController extends Controller
{


  public function index(Request $request){

    //Consultar notificaciones no eliminadas y en orden descendente por fecha
    return view('admin.niveles');

  }



}
