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
      echo "<span>www.letsmakeprofit.com/".$cliente->refid."</span>";
  }


}


}
