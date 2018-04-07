<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Clientes;
use App\Models\Perfil;
use App\Models\MediospagoClientes;
use App\Models\Mediospago;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

use Auth;


class PerfilController extends Controller
{


  public function index(Request $request){

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $user=User::where("id","=",Auth::user()->id)->get()->first();
    $perfil=Perfil::where("cliente_id","=",$cliente->id)->get()->first();
    if(!is_object($perfil)){
      $perfil=Perfil::create([
          "cliente_id"=>$cliente->id
      ]);
    }

    $mediospago=$this->getMediosPago($cliente);
    
    $data=['cliente' =>$cliente,"user"=>$user,"perfil"=>$perfil,"mediospago"=>$mediospago];

    if($request->session()->has('mensaje_success')!=""){

      $data["mensaje_success"]=$request->session()->get('mensaje_success');
      $request->session()->forget('mensaje_success');

    }
    if($request->session()->get('mensaje_bad')!=""){

      $data["mensaje_bad"]=$request->session()->get('mensaje_bad');
      $request->session()->forget('mensaje_bad');
    }
    return view('admin.perfil')->with($data);
  }


  public function show(Request $request, $id){

    $cliente=Clientes::where("id","=",$id)->get()->first();
    $perfil=Perfil::where("cliente_id","=",$cliente->id)->get()->first();
    $mediospago=$this->getMediosPago($cliente);

    $data=array("cliente"=>$cliente,"perfil"=>$perfil,"mediospago"=>$mediospago);
    return view('admin.perfil-detalle')->with($data);


  }

  public function update(Request $request){

    $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
    $user=User::where("id","=",Auth::user()->id)->get()->first();
    $perfil=Perfil::where("cliente_id","=",$cliente->id)->get()->first();
    $mensaje_bad="";
    $data=['cliente' =>$cliente,"user"=>$user,"perfil"=>$perfil];
    //New password

    if($request->get("nuevo_password")!="" && $request->get("btn_actualizar_password")=="true"){

      if($request->get("nuevo_password")==$request->get("confirmar_password")){
        $user->password = Hash::make($request->get('nuevo_password'));
        $user->save();
        $request->session()->put("mensaje_success",$mensaje_bad);
        $data["mensaje_success"]="Contraseña actualizada exitosamente";
        return redirect()->route('perfil')->with($data);

      }else{
        $data["mensaje_bad"]="Las Contraseñas no coinciden";
        $request->session()->put("mensaje_bad",$mensaje_bad);
        return redirect()->route('perfil')->with($data);

      }
    }

     if(is_object($perfil)){

     } else{
       $perfil=Perfil::create([
           "cliente_id"=>$cliente->id
       ]);
     }
     $perfil->telefono=$request->input("telefono");
     $perfil->telefonodos= $request->input("telefono");
     $perfil->email=$request->input("email");
     $perfil->edad=$request->input("edad");
     $perfil->genero=$request->input("genero");
     $perfil->facebook=$request->input("facebook");
     $perfil->google=$request->input("google");
     $perfil->whatsapp=$request->input("whatsapp");
     $perfil->twitter=$request->input("email");
     $perfil->pais=$request->input("twitter");
     $perfil->ciudad=$request->input("ciudad");
     $perfil->direccion=$request->input("direccion");
     $perfil->codigo_postal=$request->input("codigo_postal");
     $perfil->terminos=$request->input("terminos");
     $perfil->save();

     //Actualizar Medios de pago
     $medios=$_POST["medio"];

     foreach ($medios as $key => $medio) {
      $medio=(object) $medio;
      //Buscar o crear el medio de pago del cliente
      $existe=MediospagoClientes::where("mediopago_id","=",$key)->where("cliente_id","=",$cliente->id)->get()->first();

      if(is_object($existe)){
        $medio_cliente=$existe;
        $medio_cliente->link=$medio->link;
        $medio_cliente->nombre=$medio->nombre;
        $medio_cliente->numero=$medio->numero;
        $medio_cliente->save();
      }

      else{
        $medio_cliente=MediospagoClientes::create([
            "cliente_id"=>$cliente->id,
            "mediopago_id"=>$key,
            "link"=>$medio->link,
            "numero"=>$medio->numero,
            "nombre"=>$medio->nombre
        ]);
      }

     }

     $mensaje_success="Información Actualizada exitosamente";
     $data=['cliente' =>$cliente,"user"=>$user,"perfil"=>$perfil,"mensaje_success"=>$mensaje_success,"mensaje_bad"=>$mensaje_bad];
     $request->session()->put("mensaje_success",$mensaje_success);
     return redirect()->route('perfil')->with($data);

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
