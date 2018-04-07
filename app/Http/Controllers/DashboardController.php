<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clientes;
use App\Models\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Auth;
use DB;


class DashboardController extends Controller
{


  public function index(Request $request){

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $perfil=Perfil::where("cliente_id","=",$cliente->id)->get()->first();
    $creditos=$this->getCreditos($cliente->id);
    $request->session()->put("creditos",$creditos);
    $referidos=Clientes::where("parent_id","=",$cliente->id)->get();
    $ahora=strtotime(date("Y-m-d"));
    $fecha_registro=strtotime((date_format($cliente->created_at,"Y-m-d")));
    $dias=floor(($ahora-$fecha_registro)/86400);
    $data=array("cliente"=>$cliente,"perfil"=>$perfil,"total_referidos"=>count($referidos),"creditos"=>$creditos,"dias"=>$dias);

    return view('admin.index')->with($data);
  }

  public function changeUserLink(Request $request){

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $username=mb_strtolower($request->get("username"));
    //Buscamos si existe un username igual
    $existe=Clientes::where("refid","=",$username)->get()->first();
    if($existe){
      if($existe->id!=$cliente->id){
        $success=false;
        $mensaje="Link usuario ya existe";
      }else{
        $success=true;
        $mensaje="Link usuario actualizado exitosamente";
      }
    }else{

      $cliente->refid=$username;
      $cliente->save();
      $success=true;
      $mensaje="Link usuario actualizado exitosamente";
    }

    return Response(json_encode(array("success"=>$success,"mensaje"=>$mensaje)));

  }

  private function getCreditos($cliente_id){
    $sql="select sum(dinero) as credito,cliente_id from notificacion_pago where aprobado=1";
    $sql.=" and cliente_id=$cliente_id  group by `cliente_id`";
    $credito=0;
    $result=DB::select(DB::raw($sql));
    if(is_array($result)){
      if(isset($result[0])){
          $credito=$result[0]->credito;
      }
    }
    return $credito;
  }


}
