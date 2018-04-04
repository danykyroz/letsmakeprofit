<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clientes;
use App\Models\Perfil;
use App\Models\Notificaciones;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;


class ReferidosController extends Controller
{


  public function index(Request $request){

    //Consultar notificaciones no eliminadas y en orden descendente por fecha
    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $referidos=Clientes::where("parent_id","=",$cliente->id)->paginate(25);
    $list_referidos=array();
    foreach($referidos as $referido){
        $perfil=Perfil::where("cliente_id","=",$referido->id)->get()->first();
        $list_referidos[]=array("referido"=>$referido,"perfil"=>$perfil);
    }
    $data=array("listreferidos"=>$list_referidos,"referidos"=>$referidos);
    return view('admin.mis-referidos')->with($data);

  }



}
