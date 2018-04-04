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


class NotificacionesController extends Controller
{


  public function index(Request $request){

    //Consultar notificaciones no eliminadas y en orden descendente por fecha
    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();

    $notificaciones=Notificaciones::where("cliente_id","=",$cliente->id)
                                   ->where("eliminada","=","0")
                                   ->orderBy("created_at","DESC")
                                   ->get();

    $data=array("notificaciones"=>$notificaciones);

    return view('admin.notificaciones')->with($data);

  }

  public function delete(Request $request){

    //Consultar notificaciones no eliminadas y en orden descendente por fecha
    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $id=$request->get("id");
    $success=false;
    $mensaje="";

    $notificacion=Notificaciones::where("cliente_id","=",$cliente->id)->where("id","=",$id)->get()->first();
    if(is_object($notificacion)){
      $notificacion->eliminada=1;
      $notificacion->save();
      $success=true;
      $mensaje="Notificación eliminada exitosamente";
    }

    return Response(json_encode(array("success"=>$success,"mensaje"=>$mensaje)));

  }

}
