<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Models\User;
use App\Models\Clientes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Auth;


class HelperController extends Controller
{

public static function link_asociado(){

  $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
  if($cliente->refid==""){
    echo "<a href='#' onclick='editar_link_asociado(".$cliente->id.");return false' >Editar</a>";
  }else{
      echo "<span class='link-asociado'>http://letsmakeprofit.co/m/".$cliente->refid."</span>";
  }
}

public static function nombre_usuario(){

  $cliente=Clientes::where("user_id","=",Auth::user()->id)->get()->first();
  echo $cliente->names." ".$cliente->last_names;
}


}
