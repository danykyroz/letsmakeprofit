<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clientes;
use App\Models\Perfil;
use App\Models\Mediospago;
use App\Models\MediospagoClientes;
use App\Models\Notificaciones;
use App\Models\Niveles;
use App\Models\NotificacionPago;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

use Auth;


class NivelesController extends Controller
{


  public function index(Request $request){

    //Consultar notificaciones no eliminadas y en orden descendente por fecha
    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $niveles_superiores= Niveles::where("nivel",">",$cliente->nivel)->get();
    $list_niveles=array();
    $niveles=Niveles::all();
    $list_niveles[1]=$this->getMiembrosNivel($niveles[0]);
    foreach($niveles as $nivel){
      //Buscamos si el clente ya realizo pagos a usuarios de niveles abajo
      $list_niveles[$nivel->nivel]=$this->getMiembrosNivel($nivel);

    }

    $data=array("cliente"=>$cliente,"niveles"=>$niveles,"listniveles"=>$list_niveles);
    return view('admin.niveles')->with($data);

  }

  public function notificar_pago(Request $request){

    $file=false;
    $isimage=false;
    $filename="";
    $success=false;
    $mensaje="Error inesperado al intentar guardar el registro";

    if( isset($_FILES["file"])) {
      $file=$_FILES["file"];
      $esimagen=strstr($file["type"],"image");

      if($esimagen){
        $filename = $request->file('file')->store('pagos');

        $ruta="./_laravel-letsmakeprofit/storage/app/".$filename;
        $ruta2="./storage/".$filename;

        if(is_file($ruta)){

          copy($ruta,$ruta2);
        }
        else{
          echo "error file".$ruta;
        }

        //copy($filename, 'storage/'.$filename);

      }
      else{
        $file=false;
      }
    }

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $nivel=Niveles::where("nivel","=",$request->nivel)->get()->first();
    $referido=Clientes::where("id","=",$request->referido_id)->get()->first();
    try{
      $notificacionPago=new NotificacionPago();
      $notificacionPago->cliente_id=$cliente->id;
      $notificacionPago->referido_id=$referido->id;
      $notificacionPago->comentarios=$request->comentarios;
      $notificacionPago->archivo=$filename;
      $notificacionPago->nivel=$nivel->nivel;
      $notificacionPago->dinero=$nivel->dinero;
      $notificacionPago->aprobado=0;
      //$notificacionPago->fecha_aprobacion=date("Y-m-d H:i:s");
      $notificacionPago->save();
      if(is_object($notificacionPago)){
        $success=true;
        $mensaje="Notificación de pago enviada exitosamente";
      }
    }catch(Exception $ex){
      $success=false;
      $mensaje="Error inesperado al intentar guardar el registro";
    }

   //Enviar un correo para el usuario con la notificacion
   return new Response(json_encode(array("success"=>$success,"mensaje"=>$mensaje)));

  }

  public function activaciones(Request $request){

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $activaciones=NotificacionPago::where("referido_id","=",$cliente->id)
                                   ->where("aprobado","=",0)
                                  ->get();

    $data=array("activaciones"=>$activaciones);
    $listactivaciones=array();

    foreach ($activaciones as $activacion) {
      $usuario=Clientes::where("id","=",$activacion->cliente_id)->get()->first();
      $perfil=Perfil::where("cliente_id","=",$activacion->cliente_id)->get()->first();
      $listactivaciones[]=array("activacion"=>$activacion,"cliente"=>$usuario,"perfil"=>$perfil);
    }

    $mensaje_success="";
    if($request->session()->get("mensaje_success")!=""){
      $mensaje_success=$request->session()->get("mensaje_success");
      $request->session()->forget("mensaje_success");
    }

    $data=array("activaciones"=>$listactivaciones,"mensaje_success"=>$mensaje_success);
    return view('admin.activaciones')->with($data);

  }
  public function aprobar_usuario(Request $request){

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $id=$request->id;
    $activacion=NotificacionPago::where("id","=",$id)
                                 ->where("referido_id","=",$cliente->id)
                                 ->get()->first();

    if(is_object($activacion)){

      $activacion->fecha_aprobacion=date("Y-m-d");
      $activacion->aprobado=1;
      $activacion->save();

      $nivel=Niveles::where("nivel","=",$activacion->nivel)->get()->first();
      //Consultamos cuanto es el minimo de aprobaciones para pasar de niveles
      $activaciones=NotificacionPago::where("nivel","=",$nivel->nivel)
                                     ->where("cliente_id","=",$activacion->cliente_id)
                                     ->get()->first();

      if(count($activaciones)>=$nivel->minimo){
        $usuario=Clientes::where("id","=",$activacion->cliente_id)->get()->first();
        $usuario->nivel=$nivel->nivel;
        $usuario->save();
      }
      $mensaje_success="Pago Aprobado Exitosamente";
      $request->session()->put("mensaje_success",$mensaje_success);
      return redirect()->route('activaciones');

    }

  }

  private function getMiembrosNivel($nivel){

    $referido_sistema=Clientes::where("id","=",1)->get()->first();
    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $referido=Clientes::where("id","=",$cliente->parent_id)->get()->first();
    $minimo=$nivel->minimo;
    $nivel_id=$nivel->nivel;

    $arr_niveles=array();

    //Buscamos pagos anteriores

    $existe=NotificacionPago::where("cliente_id","=",$cliente->id)
                             ->where("nivel","=",$nivel->nivel)->get()->first();

    if($existe){
      $referido=Clientes::where("id","=",$existe->referido_id)->get()->first();
      $perfil=Perfil::where("cliente_id","=",$existe->referido_id)->get()->first();
      $mediospago=$this->getMediosPago($referido);
      $arr_niveles[]=array("referido"=>$referido,"perfil"=>$perfil,"mediospago"=>$mediospago,"notificacion_pago"=>$existe);
    }
    if(count($arr_niveles)==$minimo){
      return $arr_niveles;
    }

    if($referido->nivel>$cliente->nivel){
        $perfil=Perfil::where("cliente_id","=",$referido->id)->get()->first();
        $mediospago=$this->getMediosPago($referido);
        $arr_niveles[]=array("referido"=>$referido,"perfil"=>$perfil,"mediospago"=>$mediospago,"notificacion_pago"=>false);
    }

    //Buscamos de ese cliente los referidos que el nivel sea mayor al actualizado
    $referidos_mayor_nivel=Clientes::where("parent_id","=",$referido->id)
                                      ->where("nivel",">",$nivel_id)->get();

    if(count($referidos_mayor_nivel)>0){

    }else{
      $referidos_mayor_nivel=Clientes::where("nivel",">",$nivel_id)->orderBy("nivel","asc");
    }
    //
    if(is_array($referidos_mayor_nivel)){
      foreach ($referidos_mayor_nivel as $referido) {
        $perfil=Perfil::where("cliente_id","=",$referido->id)->get()->first();
        $mediospago=$this->getMediosPago($referido);
        $arr_niveles[]=array("referido"=>$referido,"perfil"=>$perfil,"mediospago"=>$mediospago,"notificacion_pago"=>false);
        if(count($arr_niveles)==$minimo){
          break;
        }
      }
    }else{

      while(count($arr_niveles)<$minimo){
        $perfil=Perfil::where("cliente_id","=",$referido_sistema->id)->get()->first();
        $mediospago=$this->getMediosPago($referido_sistema);
        $arr_niveles[]=array("referido"=>$referido_sistema,"perfil"=>$perfil,"mediospago"=>$mediospago,"notificacion_pago"=>false);
      }
    }


    return $arr_niveles;

  }

  private function getMediosPago($cliente){

    $arr_mediospago=Mediospago::all();
    $mediospagoCliente=MediospagoClientes::where("cliente_id","=",$cliente->id)->get();
    $mediospago=[];

    foreach($arr_mediospago as $medio){
        $medio["link"]="";
        $medio["numero"]="";
        $mediospago[$medio->id]=$medio;
    }

    foreach($mediospagoCliente as $mediocliente){
      $medio=$mediospago[$mediocliente->mediopago_id];
      $medio["link"]=$mediocliente->link;
      $medio["nombre"]=$mediocliente->nombre;
      $medio["numero"]=$mediocliente->numero;

      $mediospago[$mediocliente->mediopago_id]=$medio;
    }

    return $mediospago;
  }



}
