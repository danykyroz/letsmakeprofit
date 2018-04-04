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


class HomeController extends Controller
{

  public function index(Request $request){

    $data=array("rid"=>"admin");
    return view('home')->with($data);

  }


  public function homerid(Request $request, $rid){

    $request->session()->put("rid",$rid);
    $data=array("rid"=>$rid);
    return view('home')->with($data);

  }


}
